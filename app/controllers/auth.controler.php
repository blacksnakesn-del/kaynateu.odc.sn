
<?php

class AuthController extends Controller
{

    public function index()
    {
        $this->view("auth/login");
    }

    public function login()
    {
        $this->view("auth/login");
    }

    public function register()
    {
        $this->view("auth/register");
    }

    public function logout()
    {
        session_destroy();

        $this->redirect("/");
    }

}