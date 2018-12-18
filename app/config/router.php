<?php

$router = $di->getRouter();

//$router->add(
//    '/cms',
//    [
//        'controller' => 'users',
//        'action'     => 'profile',
//    ]
//);

$router->handle();
