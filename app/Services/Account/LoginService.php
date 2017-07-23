<?php

namespace App\Services\Account;

use App\Models\User;
use Illuminate\Auth\AuthManager;

class LoginService
{
    /**
     * @var \Illuminate\Auth\AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function loginUser(User $user)
    {
        $this->auth->guard()->login($user, true);
    }

    public function validate(array $credentials)
    {
        return $this->auth->guard()->validate($credentials);
    }

    public function logout()
    {
        $this->auth->guard()->logout();
    }
}