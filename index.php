<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 21:02
 */

require_once("Config/custom.php");
require_once("Config/Route.php");

/*Rotas das requisições*/

$routes = new Route();
$routes->setRoute($_GET['action']);
$content = $routes->getRoute();

/*Carrega layout default do sistema */
require_once("Layout/index.php");

