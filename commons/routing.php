<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url)
{
    $router = new RouteCollector();

    //định nghĩa url
    $router->get('/', function(){
        return 'This route responds to requests with the GET method at the path /example';
    });
    $router->group(['prefix' => 'mon-hoc'],function ($router){
        $router->get('',[\App\Controllers\SubjectController::class,'index']);
        $router->get('/tao-moi',[\App\Controllers\SubjectController::class,'addForm']);
        $router->post('/tao-moi',[\App\Controllers\SubjectController::class,'saveAdd']);
        $router->get('/cap-nhat/{id}',[\App\Controllers\SubjectController::class,'updateForm']);
        $router->post('/cap-nhat/{id}',[\App\Controllers\SubjectController::class,'saveUpdate']);
        $router->get('/xoa/{id}',[\App\Controllers\SubjectController::class,'remove']);
        $router->get('/chi-tiet/subject_id/{id}',[\App\Controllers\SubjectController::class,'detail']);
    });





    $dispatcher = new Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));

    // Print out the value returned from the dispatched function
    echo $response;
}

?>