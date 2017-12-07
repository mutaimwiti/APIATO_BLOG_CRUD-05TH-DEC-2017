<?php

namespace App\Containers\Authentication\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\UI\WEB\Requests\LoginRequest;
use App\Containers\Authentication\UI\WEB\Requests\RegisterRequest;
use App\Containers\Authentication\UI\WEB\Requests\ViewHomeRequest;
use App\Ship\Parents\Controllers\WebController;
use Exception;

class DefaultController extends WebController
{

    public function showLoginPage()
    {
        return view('authentication::auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $result = Apiato::call('Authentication@WebLoginAction', [$request]);
        } catch (Exception $e) {
            return redirect('login')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('login')->with($result) : redirect('home');
    }

    public function viewHomePage(ViewHomeRequest $request)
    {
        return view('blog::home');
    }

    public function showRegisterPage()
    {
        return view('authentication::auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try{
            $result = Apiato::call('User@RegisterUserAction', [$request]);
        }catch (Exception $e) {
            return redirect('register')->with('status',$e->getMessage());
        }

        return is_array($result) ? redirect('register')->with($result) : redirect('home');
    }

    public function logout()
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }

}
