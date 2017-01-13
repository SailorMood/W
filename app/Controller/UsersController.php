<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\insertUserModel;
use \Model\LoginModel;
use W\Security\AuthentificationModel;


class UsersController extends Controller
{
    public function afficher()
    {
        $this -> show('users/home');
    }

    public function inscriptionf()
    {
        if(isset($_POST['inscription'])){
            $newUser = array(
                "username" => $_POST['username'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            );
            $insertUser = new insertUserModel();
            $insertion = $insertUser -> insertUser($newUser);
        }

        $this -> show('users/insciption');
    }
    public function connexionf()
    {
        if(isset($_POST['connexion'])){
            $authUser = new AuthentificationModel();
            $userID = $authUser -> isValidLoginInfo($_POST['email'], $_POST['password']);
            var_dump($userID);
        }

        $this -> show('users/connexion');

    }
}