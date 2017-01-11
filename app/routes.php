<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        //Articles
        ['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
        ['GET', '/articles/afficher/', 'ArticlesController#afficherf', 'articles_afficher'],
        ['GET|POST', '/articles/poster/', 'ArticlesController#posterf', 'articles_poster'],
        ['GET|POST', '/articles/modifier/', 'ArticlesController#modifierf', 'articles_modifier'],

        //Utilisateurs
        ['GET|POST', '/users/', 'UsersController#afficher', 'users'],
        ['GET', '/users/insciption/', 'UsersController#inscriptionf', 'insciption'],
        ['GET', '/users/connexion/', 'UsersController#connexionf', 'connexion'],
	);