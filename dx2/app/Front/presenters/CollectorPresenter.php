<?php

namespace App\FrontModule\Presenters;

use Nette,
    Nette\Http\Session;

class CollectorPresenter extends BasePresenter {

    /** @var Session */
    private $session;

    public function handleCollect() {
        $post = $this->getHttpRequest()->getPost();

        $ids = $this->session->getSection('web')->fpId;

        if (is_array($ids)) {
            foreach ($ids as $id) {
                $this->fingerprints->update($id, $post);
            }
        } else {
            $this->fingerprints->update($ids, $post);
        }

        $this->session->getSection('web')->fpId = array();
        die();
    }

    public function injectSession(Session $s) {
        $this->session = $s;
    }
}