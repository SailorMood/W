<?php

namespace Controller;

use \W\Controller\Controller;

class ArticlesController extends Controller
{

    public function afficher()
    {
        $this -> show('articles/home');
    }
    public function posterf()
    {
        $this -> show('articles/poster');
    }
    public function modifierf()
    {
        $this -> show('articles/modifier');
    }
    public function afficherf()
    {
        $this -> show('articles/afficher');
    }
}