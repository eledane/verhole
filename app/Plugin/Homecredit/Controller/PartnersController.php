<?php
App::uses('HomecreditAppController', 'Homecredit.Controller');
/**
 * Partners Controller
 *
 */
class PartnersController extends HomecreditAppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

    /**
     *
     */
    public function sendPartnerEmail() {
        if ($this->request->is('post') or $this->request->is('put')) {
            $data = $this->request->data;

            $email = new CakeEmail('smtp');
            $email->template('partner_contact_email');
            $email->viewVars(array('data' => $data));
            $email->from();
            $email->to(Configure::read('partner_form.ot'));
            $email->subject();

            return $email->send();
        }
    }

}
