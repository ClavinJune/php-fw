<?php
  $app = [];
  $app['config'] = require_once 'config.php';
  
  require_once 'core/database/Connection.php';
  require_once 'core/database/QueryBuilder.php';
  require_once 'core/Router.php';
  require_once 'core/Request.php';
  
  $app['database'] = 
    new QueryBuilder(Connection::create($app['config']['database']));