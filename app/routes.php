<?php
/**
 *  define routes with its controllers and actions 
 */
const routes = array(
    '/'             => array('HomeController', 'index'),
    '/home'         => array('HomeController', 'index'),

    //users routes
    '/users'        => array('UserController', 'index'),
    '/users/load'   => array('UserController', 'load'),
    '/users/show'   => array('UserController', 'getDetail'),
    '/users/add'    => array('UserController', 'add'),
    '/users/edit'   => array('UserController', 'edit'),
    '/users/delete' => array('UserController', 'delete'),

    //commercial routes
    '/commercials'        => array('CommercialController', 'index'),
    '/commercials/load'   => array('CommercialController', 'load'),
    '/commercials/show'   => array('CommercialController', 'getDetail'),
    '/commercials/add'    => array('CommercialController', 'add'),
    '/commercials/edit'   => array('CommercialController', 'edit'),
    '/commercials/delete' => array('CommercialController', 'delete'),


    //category routes
    '/categories'        => array('CategorieController', 'index'),
    '/categories/load'   => array('CategorieController', 'load'),
    '/categories/show'   => array('CategorieController', 'getDetail'),
    '/categories/add'    => array('CategorieController', 'add'),
    '/categories/edit'   => array('CategorieController', 'edit'),
    '/categories/delete' => array('CategorieController', 'delete'),
);
