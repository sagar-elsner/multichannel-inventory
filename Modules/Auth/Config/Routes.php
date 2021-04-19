<?php
 
 namespace Modules\Auth\Controllers;

 $routes->get('/', 'Modules\Auth\Controllers\AuthController::index',['filter'=>'noauth']);
 
$routes->group("/", ["namespace" => "\Modules\Auth\Controllers"], function ($routes) {

    $routes->get('/', 'AuthController::index',['filter'=>'noauth']);
    
    $routes->match(['get','post'],'login','AuthController::login',['filter'=>'noauth']);
    
    // $routes->get('dashboard', '\Modules\Dashboard\Controllers\index');
    
    $routes->get('logout', 'AuthController::logout');
    
    $routes->get('forgot_password','AuthController::forgotPasswordPage');
    
    $routes->post('forgotpassword','AuthController::forgotPassword');
    $routes->get('resetpassword/(:any)','AuthController::resetPasswordPage/$1');
    $routes->post('resetpassword','AuthController::resetPassword');
  

});