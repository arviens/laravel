<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Services\Account\LoginService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
