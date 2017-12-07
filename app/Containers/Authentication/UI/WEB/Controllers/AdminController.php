<?php

namespace App\Containers\Authentication\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\UI\WEB\Requests\LoginRequest;
use App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest;
use App\Ship\Parents\Controllers\WebController;
use Exception;

class AdminController extends WebController
{
    public function showLoginPage()
    {
        return view('authentication::auth.admin.login');
    }

    public function loginAdmin(LoginRequest $request)
    {
        try {
            $result = Apiato::call('Authentication@WebAdminLoginAction', [$request]);
        } catch (Exception $e) {
            return redirect('login')->with('status', $e->getMessage());
        }

        return is_array($result) ? redirect('login')->with($result) : redirect('dashboard');
    }

    public function viewDashboardPage(ViewDashboardRequest $request)
    {
        return view('authentication::dashboard');
    }

    public function logoutAdmin()
    {
        Apiato::call('Authentication@WebLogoutAction');

        return redirect('login');
    }

}
