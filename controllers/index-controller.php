<?php
  
  $brands = $app['database']->selectAll('brands');
  require_once('views/index-view.php');