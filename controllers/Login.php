<?php
/*
Filename : controllers/Login.php
Tools : SimplePHPBot
Author : Freddy Wicaksono, M.Kom
*/
include_once('models/LoginModel.php');

class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function login_validation($email, $password)
    {
        return $this->model->login_validation($email, $password);
    }

    public function addUsers($email,$nama,$password)
    {
        return $this->model->addUsers($email,$nama,$password);
    }

}