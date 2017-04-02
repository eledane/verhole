<?php

namespace App\FrontModule\Presenters;

use Nette,
    App\Model\CartIDModel,
    App\Model\CartItemModel,
    App\Model\CartModel,
    App\Model\UserManager,
    Nette\Http\Request,
    Nette\Http\Response,
    App\Model\TextModel,
    App\Model\FingerprintModel,
    App\Model\VersionService;
use Kdyby\Translation\Translator;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var CartIDModel @inject */
    public $cartIDs;

    /** @var CartModel @inject */
    public $carts;

    /** @var CartItemModel @inject */
    public $cartItems;

    /** @var UserManager @inject */
    public $users;

    /** @var VersionService @inject */
    public $versions;

    /** @var FingerprintModel */
    public $fingerprints;

    /** @var int */ //@persistent
    public $v;

    /** @var TextModel */
    private $texts;

    /** @var Nette\Http\Request */
    private $request;

    /** @var Nette\Http\Response */
    private $response;

    /** @var \Kdyby\Translation\Translator */
    protected $translator;

    /** @persistent */
    public $locale;

    public function beforeRender() {
        $this->translator->setLocale($this->locale);
        $this->template->locale = $this->translator->getLocale();
        $this->template->url = $this->getHttpRequest()->getUrl()->getPath();
        throw new Nette\Application\BadRequestException;
    }

	protected function startup(){
        parent::startup();

        $expires = time() + (1 * 24 * 60 * 60); // 1 day
        $expires = date('D, d M Y H:i:s T', $expires);
        $this->getHttpResponse()->setHeader('Cache-Control', 'public, max-age=86400');
        $this->getHttpResponse()->setHeader('Expires', $expires);

        $versionSession = $this->getSession('web');

        $param = 2; // $this->getParameter('v');
        $version = $param ? intval($param) : 0;
        if ($version != 0 && $version != 1 && $version != 2) {
            $version = 0;
        }
        $this->v = $version;
        $versionSession->version = $version;

        if (is_null($versionSession->visitorHash)) {
            $hash = hash('sha256', time());
            $versionSession->visitorHash = $hash;
            $this->template->visitorHash = $hash;
        } else {
            $this->template->visitorHash = $versionSession->visitorHash;
        }

        if (!$this->cartIDs->getCurrentCartID()) {
            $this->generateNewUserID();
        } else {
            $row = $this->context->getService('carts')->get($this->cartIDs->getCurrentCartID());

            if($row) {
                if ($row->closed) {
                    $this->generateNewUserID();
                }
            } else {
                $this->generateNewUserID();
            }
        }
        $this->updateVersion();

        $fullCss = $this->getHttpRequest()->getCookie('full-css');
        $this->getHttpResponse()->setCookie('full-css', true, time() + 3600 * 24);
        $this->template->fullCss = $fullCss;

        $this->template->realVersion = $this->v;
        $this->template->version = $this->versions->getCorrectVersion($this->v);

        $this->template->cartId = $this->cartIDs->getCurrentCartID();
        $this->template->cartName = $this->cartIDs->getCurrentCartName();
        $this->template->basePath = $this->request->url->baseUrl;
        $this->template->texts = $this->texts;

        $debugger = \Tracy\Debugger::detectDebugMode(array('127.0.0.1', '213.151.93.106'));
        $this->template->debuggerEnabled = $debugger;
        $this->updateCartItemCount();
	}

    public function updateCartItemCount() {
        $cartItems = $this->cartItems->getCartItems($this->cartIDs->getCurrentCartID());
        $count = count($cartItems);
        $price = 0;
        foreach ($cartItems as $cartItem) {
            $price += $cartItem['price'];
        }

        $this->template->cartItemsPrice = $price;
        $this->template->cartItems = $cartItems;
        $this->template->cartItemCount = $count;
        $this->redrawControl('header');
        $this->redrawControl('cartItemCount');
        $this->redrawControl('cartItemCountMobile');
    }

    private function generateNewUserID() {
        $fp = $this->fingerprints->collect();
        $id = $this->carts->createNewCart($fp);
        $this->cartIDs->setCurrentSectionID($id);

        return $id;
    }

    private function updateVersion() {
        $id = $this->cartIDs->getCurrentCartID();
        $this->carts->updateVersion($id, $this->v);
    }

    public function sendAnalytics($event, $category, $action, $label, $value) {
        $this->payload->sendAnalytics = [
            'event' => $event,
            'category' => $category,
            'action' => $action,
            'label' => $label,
            'value' => $value
        ];
    }

    public function injectRequest(Request $r) {
        $this->request = $r;
    }

    public function injectResponse(Response $r) {
        $this->response = $r;
    }

    public function injectTextModel(TextModel $t) {
        $this->texts = $t;
    }

    public function injectFingerprintModel(FingerprintModel $fingerprintModel) {
        $this->fingerprints = $fingerprintModel;
    }

    public function injectTranslator(Translator $t){
        $this->translator = $t;
    }

}
