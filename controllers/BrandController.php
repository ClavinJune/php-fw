<?php

$app['database']->insert('brands', [
  'name' => $_POST['name'],
]);
header('Location: /');