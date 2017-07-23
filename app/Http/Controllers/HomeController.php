<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Services\Account\LoginService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var LoginService
     */
    private $loginService;

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * LoginController constructor.
     * @param LoginService $loginService
     * @param UserRepository $userRepository
     */
    public function __construct(LoginService $loginService, UserRepository $userRepository)
    {
        $this->loginService = $loginService;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $loginStatus = $this->loginService->validate($request->only(['username', 'password']));

        if ($loginStatus) {
            $currentUser = $this->userRepository->getByUsername($request->get('username'));
            $this->loginService->loginUser($currentUser);
        } else {
            return redirect()->route('home');
        }

        return redirect()->route('dashboard:index');
    }

    public function logout()
    {
        $this->loginService->logout();

        return redirect()->route('home');
    }
}
