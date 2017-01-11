<?php

namespace Controller;

use \W\Controller\Controller;


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
    }
}