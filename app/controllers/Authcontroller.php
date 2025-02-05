<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Controller;
use App\Core\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        $this->render('authentification/sign_in');
    }

    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Find the user by email
        $user = User::where('email', $email)->first();

        // Verify the password
        if ($user && password_verify($password, $user->password)) {
            // Set user session
            Session::set('user', $user);

            // Redirect to the dashboard or home page
            $this->redirect('/dashboard');
        } else {
            // Set error message
            Session::set('error', 'Invalid email or password');

            // Redirect back to the login page
            $this->redirect('/login');
        }
    }
}

    public function logout()
    {
        Session::destroy();
        $this->redirect('/');
    }
}
