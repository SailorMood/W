<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        //Articles
        ['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
        ['GET', '/articles/afficher/', 'ArticlesController#afficherf', 'articles_afficher'],
        ['GET|POST', '/articles/poster/', 'ArticlesController#posterf', 'articles_poster'],
        ['GET|POST', '/articles/modifier/', 'ArticlesController#modifierf', 'articles_modifier'],

        //Utilisateurs
        ['POST', '/users/', 'UsersController#afficher', 'users'],
        ['POST', '/users/inscription/', 'UsersController#inscriptionf', 'insciption'],
        ['POST', '/users/connexion/', 'UsersController#connexionf', 'connexion'],
	);