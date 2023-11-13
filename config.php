<?php

define('_HOST',"localhost");
define('_DB',"caverna_de_estilos");
define('_USER',"root");
define('_PASS',"");

define("BASE_URL", "http://localhost/caverna.ao/");
define("SRC_IMG", "http://localhost/caverna.ao/img/");
require_once('models/produto.php');
require_once('models/Produtos.php');
require_once('models/Usuarios.php');
require_once('models/MySql.php');

	$bd = new MySql;
	session_start();