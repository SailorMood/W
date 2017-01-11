<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
        ['GET|POST', '/users/', 'UsersController#afficher', 'users'],
        ['GET', '/users/insciption/', 'UsersController#inscriptionf', 'insciption'],
        ['GET', '/users/connexion/', 'UsersController#connexionf', 'connexion'],
	);