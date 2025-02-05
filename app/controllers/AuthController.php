<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Core\Validator;
use App\Core\Security;

class AuthController extends Controller
{
    public function loginForm()
    {
        $this->view('login', ['csrf_token' => (new Security())->protectCSRF()]);
    }

   
    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $validator = new Validator();
        $security = new Security();
        $auth = new Auth();

        $username = $security->protectXSS($_POST['username']);
        $password = $_POST['password'];

        if ($validator->validate(['username' => $username, 'password' => $password], ['username' => 'required', 'password' => 'required'])) {
            if ($auth->login($username, $password)) {
                $this->redirect('/dashboard');
            } else {
                $this->view('login', ['error' => 'Invalid username or password.']);
            }
        } else {
            $this->view('login', ['error' => 'All fields are required.']);
        }
    } else {
        $this->redirect('/login');
    }
}


    public function dashboard()
    {
        $auth = new Auth();
        if ($auth->isLoggedIn()) {
            $user = $auth->getUser();
            $this->view('dashboard', ['user' => $user]);
        } else {
            $this->redirect('/login');
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth->logout();
        $this->redirect('/login');
    }

    public function registerForm()
{
    $this->view('front/registre');
}

public function register()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $validator = new Validator();
        $security = new Security();
        $userModel = new UserModel();

        $username = $security->protectXSS($_POST['username']);
        $email = $security->protectXSS($_POST['email']);
        $password = $_POST['password'];

        if ($validator->validate(['username' => $username, 'email' => $email, 'password' => $password], 
            ['username' => 'required', 'email' => 'email|required', 'password' => 'required|min:6'])) {
            
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            if ($userModel->createUser($username, $email, $hashedPassword)) {
                $this->redirect('/login');
            } else {
                $this->view('front/registre', ['error' => 'Registration failed']);
            }
        } else {
            $this->view('front/registre', ['error' => 'Invalid input']);
        }
    } else {
        $this->redirect('/register');
    }
}

}
