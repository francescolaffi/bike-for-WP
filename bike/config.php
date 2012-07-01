<?php
if (!defined('LoadingBike') || !LoadingBike) die();

br()->defaultConfig();

// Folder for saved queries
br()->config()->set('savedQueriesPath', dirname(__FILE__) . '/user/');
br()->config()->set('libraryQueriesPath', dirname(__FILE__) . '/library/');

 // Database connection
 br()
   ->config()
     ->set( 'db'
          , array( 'engine'   => 'mysql'
                 , 'hostname' => DB_HOST
                 , 'name'     => DB_NAME
                 , 'username' => DB_USER
                 , 'password' => DB_PASSWORD
                 ));
