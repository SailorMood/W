<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        //Articles
        ['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
        ['GET', '/articles/afficher/', 'ArticlesController#afficherf', 'articles_afficher'],
        ['GET|POST', '/articles/poster/', 'ArticlesController#posterf', 'articles_poster'],
        ['GET|POST', '/articles/modifier/', 'ArticlesController#modifierf', 'articles_modifier'],

        //Utilisateurs
        ['GET', '/users/', 'UsersController#afficher', 'users'],
        ['GET|POST', '/users/insciption/', 'UsersController#inscriptionf', 'inscription'],
        ['GET|POST', '/users/connexion/', 'UsersController#connexionf', 'connexion']
	);