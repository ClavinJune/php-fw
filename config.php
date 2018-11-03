<?php

return [
  'database' => [
    'name' => 'demo',
    'username' => 'demo',
    'password' => 'demo',
    'connection' => 'mysql:host=127.0.0.1',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]
];