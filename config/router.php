<?php


use Illuminate\Events\Dispatcher;

$request = \Illuminate\Http\Request::createFromGlobals();
function request()
{
    global $request;

    return $request;
}

$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);
function router()
{
    global $router;

    return $router;
}

$router->get('/', '\App\Controller\CategoryController@index');
//$router->get('/', '\App\Controller\TagController@index');

$router->get('/category/create', '\App\Controller\CategoryController@create');
$router->post('/category/create', '\App\Controller\CategoryController@store');

$router->get('/category/{id}/edit', '\App\Controller\CategoryController@edit');
$router->post('/category/{id}/edit', '\App\Controller\CategoryController@update');

$router->get('/category/{id}/destroy', '\App\Controller\CategoryController@destroy');

$router->get('/tag/create', '\App\Controller\TagController@create');
$router->post('/tag/create', '\App\Controller\TagController@store');

$router->get('/tag/{id}/edit', '\App\Controller\TagController@edit');
$router->post('/tag/{id}/edit', '\App\Controller\TagController@update');

$router->get('/tag/{id}/destroy', '\App\Controller\TagController@destroy');


// Request -> Application -> Response
// HTTP Request -> Server -> HTTP Response