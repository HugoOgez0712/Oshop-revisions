<?php 

// On importe les controllers dont on pense avoir besoin

require_once __DIR__.'/../app/controllers/MainController.php';
require_once __DIR__.'/../app/controllers/CatalogController.php';
/* require_once __DIR__.'/controllers/CatalogController'; */

$routes = [
    // ici les actions
 '/' => [
     'controller' => 'MainController',
     'method' => 'homepage'
 ],

 '/category' => [
    'controller' => 'CatalogController',
    'method' => 'category'
]
];

// en fonction de l'URL de la requête, on trouve la bonne
// action à éxécuter, puis on léxécute
$requestedPage = '/';

if (isset($_GET['page'])) {
    $requestedPage = $_GET['page'];
}
var_dump($requestedPage);


$action = $routes[$requestedPage];

$controllerName = $action['controller'];
$methodName = $action['method'];

$controller = new $controllerName();
// ici c'est comme si on avait $controller = new MainController(); dans le cas de la 
// homepage. new permet de retirer les guillements prix dans la string de 
//$controller
 
$controller->$methodName();

// il faut que Apache soit au courant que sur public, 