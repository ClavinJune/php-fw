<?php
  $router->get('', 'controllers/index-controller.php');
  $router->get('about', 'controllers/about-controller.php');
  $router->post('brands', 'controllers/BrandController.php');