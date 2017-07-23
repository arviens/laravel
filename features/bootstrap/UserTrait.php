<?php

use App\Models\User;

trait UserTrait
{
    /**
     * @Given user :username exists
     */
    public function userExists(string $username, string $password = 'passw0rd')
    {
        $user = User::query()->where(['username' => $username])->first();

        if (!$user) {
            $user = new User([
                'username' => $username,
                'password' => bcrypt($password),
            ]);
        }

        return $user;
    }

    /**
     * @Given I login as :username
     */
    public function iLoginAs(string $username, string $password = 'passw0rd')
    {
        $this->iAmOnHomepage();
        $this->fillField('username', $username);
        $this->fillField('password', $password);
        $this->pressButton('Login');
    }
}