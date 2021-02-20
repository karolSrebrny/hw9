<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';


$tagindex = new \App\Controller\TagController();


$response = $router->dispatch($request);
echo $response -> getContent();




