<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\LoginModel;


class UsersController extends Controller
{
    public function afficher()
    {
        $this -> show('users/home');
    }
    public function inscriptionf()
    {
        $this -> show('users/insciption');
    }
    public function connexionf()
    {
        $this -> show('users/connexion');
        $tintin = new LoginModel("toto@gmail.com");
        var_dump($tintin);
    }
}