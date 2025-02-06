<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Controller;
use App\Core\Session;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLogin()
    {
        $this->render('authentification/sign_in');
    }
    public function showRegister()
    {
        $this->render('authentification/sign_up');
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $npassword = $_POST['npassword'];
            $role = $_POST['role'];

            if ($password === $npassword) {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


                User::create([
                    'username' => $name,
                    'email' => $email,
                    'PASSWORD' => $hashedPassword,
                    'role' => $role
                ]);

                $this->redirect('/');
            } else {
                Session::set('error', 'Passwords do not match');
                $this->redirect('/register');
            }
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = User::where('email', $email)->first();
            if ($user && password_verify($password, $user->PASSWORD)) {
                Session::set('user', $user);
                $this->redirect('/dashboard');
            } else {

                Session::set('error', 'Invalid email or password');

                $this->redirect('/');
            }
        }
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect('/');
    }
}
