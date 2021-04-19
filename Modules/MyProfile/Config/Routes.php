<?php

$routes->group('/',["namespace" => "\Modules\MyProfile\Controllers"], function ($routes) {

    $routes->get('myprofile', 'MyprofileController::index',['filter'=>'auth']);
    
    
    $routes->get('myprofile','MyprofileController::myProfilePage');

    $routes->get('changepassword','MyprofileController::changePasswordPage');
    $routes->post('myprofile','MyprofileController::updateProfile');
    $routes->post('changepassword','MyprofileController::changePassword');
    
    
  

});