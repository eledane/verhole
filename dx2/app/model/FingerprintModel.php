<?php

namespace App\Model;

use Nette,
    Nette\Http\Session;

class FingerprintModel extends Nette\Object {

    const
        TABLE_NAME = 'fingerprints';

    /** @var Nette\Database\Context  */
    private $database;

    /** @var Session */
    private $session;

    function __construct(Nette\Database\Context $db, Session $session) {
        $this->database = $db;
        $this->session = $session;
    }

    public function getAll() {
        return $this->database->table(self::TABLE_NAME);
    }

    public function collect() {
        $fp = $this->getAll()->insert(array(
            'visitor_hash' => $this->getVisitorHash(),
            'ip_address' => $this->getUserIP()
        ));

        $this->session->getSection('web')->fpId[] = $fp['id'];

        return $fp['id'];
    }

    public function update($id, $values) {
        return $this->getAll()->get($id)->update($values);
    }

    private function getUserIP() {
        return $ip = getenv('HTTP_CLIENT_IP')?:
            getenv('HTTP_X_FORWARDED_FOR')?:
            getenv('HTTP_X_FORWARDED')?:
            getenv('HTTP_FORWARDED_FOR')?:
            getenv('HTTP_FORWARDED')?:
            getenv('REMOTE_ADDR');
    }

    private function getUserAgent() {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    private function getVisitorHash() {
        return $this->session->getSection('web')->visitorHash;
    }

}