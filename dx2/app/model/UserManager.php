<?php

namespace App\Model;

use Nette,
	Nette\Utils\Random,
	Nette\Security\Passwords;


/**
 * Users management.
 */
class UserManager extends Nette\Object implements Nette\Security\IAuthenticator
{
    const
        TABLE_NAME = 'users',
        COLUMN_ID = 'id',
        COLUMN_NAME = 'email',
        COLUMN_PASSWORD_HASH = 'password',
        COLUMN_ROLE = 'role';


    /** @var Nette\Database\Context */
    private $database;

    /** @var Nette\Http\Request */
    private $request;


    public function __construct(Nette\Database\Context $database, Nette\Http\Request $request)
    {
        $this->database = $database;
        $this->request = $request;
    }

    /**
     * Performs an authentication.
     * @return Nette\Security\Identity
     * @throws Nette\Security\AuthenticationException
     */
    public function authenticate(array $credentials)
    {
        list($username, $password) = $credentials;

        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $username)->fetch();

        if (!$row) {
            throw new Nette\Security\AuthenticationException('The username is incorrect.', self::IDENTITY_NOT_FOUND);

        } elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {
            throw new Nette\Security\AuthenticationException('The password is incorrect.', self::INVALID_CREDENTIAL);

        } elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {

            $row->update(array(
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
            ));
        }

        $arr = $row->toArray();
        unset($arr[self::COLUMN_PASSWORD_HASH]);
        return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
    }

    public function add($data)
    {
        $password = Random::generate(8);

        $arr = array(
            'email' => $data['email'],
            'password' => $password,
            'url' => $this->request->url->baseUrl
        );

        try {
            $row = $this->database->table(self::TABLE_NAME)->insert(array(
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Passwords::hash($password),
                'role' => $data['role'],
                'isActive' => 1
            ));

            return $row;
        } catch (Nette\Database\UniqueConstraintViolationException $e) {
            throw new DuplicateNameException;
        }
    }

    public function get($id) {
        return $this->database->table(self::TABLE_NAME)->get($id);
    }

    public function getByMail($email) {
        return $this->database->table(self::TABLE_NAME)->where('email', $email);
    }

    public function update($id, $values) {
        return $this->get($id)->update($values);
    }

    public function findByFacebookID($fbUID) {
        return $this->database->table(self::TABLE_NAME)->where('facebookId', $fbUID)->fetch();
    }

    public function addFromFacebook($fbUID, $fbData) {
        $user = $this->getByMail($fbData['email'])->fetch();

        if (!$user) {
            $arr = array(
                'name' => $fbData['first_name'],
                'surname' => $fbData['last_name'],
                'facebookId' => $fbUID,
                'email' => $fbData['email'],
                'role' => 'user',
                'isActive' => 1
            );

            return $this->database->table(self::TABLE_NAME)->insert($arr);
        } else {
            $user->update(array(
                'name' => $fbData['first_name'],
                'surname' => $fbData['last_name'],
                'facebookId' => $fbUID
            ));

            return $user;
        }
    }

    public function updateFacebookAccessToken($fbUID, $fbAccessToken) {
        $user = $this->findByFacebookID($fbUID);

        $user->update(array(
            'facebookAccessToken' => $fbAccessToken
        ));
    }

}


class DuplicateNameException extends \Exception
{}
