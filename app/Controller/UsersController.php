<?php

namespace Controller;

use \W\Controller\Controller;


class UsersController extends Controller
{
    public function afficher()
    {
        $this -> show('users/home');
    }
    public function inscription()
    {
        $this -> show('users/inscription');
    }
}