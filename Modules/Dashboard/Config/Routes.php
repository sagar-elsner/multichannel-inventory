<?php

$routes->group('/',["namespace" => "\Modules\Dashboard\Controllers"], function ($routes) {

    $routes->get('dashboard', 'DashboardController::index',['filter'=>'auth']);
    
    //$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

  

});