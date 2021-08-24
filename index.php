<?php 

session_start();
//timezone juist zetten
date_default_timezone_set('Europe/Brussels');

 require_once 'config.php';
 require_once 'libs/db.php';

$request  = $_SERVER['REQUEST_URI'];


$path = explode('/', $request);

$controller = ucfirst(strtolower($path[1]));


$method = (!empty($path[2]) ? strtolower($path[2]) : 'index');

$param = (!empty($path[3]) ? $path[3] : null);




$controller_name = $controller . 'Controller';
$controller_path = 'controllers/' . $controller_name . '.php';



if (file_exists($controller_path)) {
    include BASE_DIR . '/views/_partials/header.php';

    require_once 'controllers/' . $controller_name . '.php';


    $controller_class = new $controller_name();

    if (method_exists($controller_class, $method)) {
        $controller_class->$method($param);

    } else {
        echo 'error';
    }

    include BASE_DIR . '/views/_partials/footer.php';

}else {
   header('location: /vaccin');
}




?>