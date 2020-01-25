<?php

require_once dirname(__FILE__, 2) . '/src/config/config.php';
require_once dirname(__FILE__, 2) . '/src/models/User.php';

$user = new User(['name' => 'Marcos', 'email' => 'marcosmpar@gmail.com']);

print_r($user);
$user->email = 'marcos.away@hotmail.com';
print_r($user->$email);
