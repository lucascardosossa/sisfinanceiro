<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 21:02
 */

// autoload classes based on a 1:1 mapping from namespace to directory structure.
spl_autoload_register(function ($className) {

    # Usually I would just concatenate directly to $file variable below
    # this is just for easy viewing on Stack Overflow)
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    // replace namespace separator with directory separator (prolly not required)
    $className = str_replace('\\', $ds, $className);

    // get full name of file containing the required class
    $file = "{$dir}{$ds}{$className}.php";

    // get file if it is readable
    if (is_readable($file)) require_once $file;
});


require_once("Config/custom.php");
require_once("Config/Route.php");
/*Rotas das requisições*/

$routes = new Route();
if (isset($_GET['action']))
    $routes->setRoute($_GET['action'], $_GET);

$content = $routes->getRoute();

/*Carrega layout default do sistema */
require_once("Layout/index.php");


