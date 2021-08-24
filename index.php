<?php 

session_start();
//timezone juist zetten
date_default_timezone_set('Europe/Brussels');
// opzet van Mvc principe
/**
 * haal url op
 * splits url
 * -> controller
 * maak method aand .../method
 * ga naar die method
 */

 // database inladen
 require_once 'config.php';
 require_once 'libs/db.php';

$request  = $_SERVER['REQUEST_URI'];

// splits de url op in / en ...
$path = explode('/', $request);
// geef ... mee aan een variabele
// alles naar lowercase
// ucfirst -> eerste letter naar hoofdletter
$controller = ucfirst(strtolower($path[1]));

// wanneer /... leeg is -> index
// wanneer er wel iets is -> method
$method = (!empty($path[2]) ? strtolower($path[2]) : 'index');
// kijken of 3de paramater bestaat (id)
$param = (!empty($path[3]) ? $path[3] : null);



// dynamisch maken van de controller naam
$controller_name = $controller . 'Controller';
$controller_path = 'controllers/' . $controller_name . '.php';


// als path naar controller bestaat 
// rest van code uitvoeren
if (file_exists($controller_path)) {
    include BASE_DIR . '/views/_partials/header.php';

    require_once 'controllers/' . $controller_name . '.php';

    // nieuwe controller aanmaken voor project
    $controller_class = new $controller_name();

    if (method_exists($controller_class, $method)) {
        $controller_class->$method($param);

    } else {
        echo 'error';
    }

    include BASE_DIR . '/views/_partials/footer.php';

}else {
    echo 'error';
}




?>