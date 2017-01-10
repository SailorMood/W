<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
        ['GET', '/users/', 'UsersController#afficher', 'users'],
        ['GET', '/users/', 'UsersController#inscription', 'inscription'],
	);