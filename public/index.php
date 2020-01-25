<?php

require_once dirname(__FILE__, 2) . '/src/config/config.php';
require_once dirname(__FILE__, 2) . '/src/models/User.php';

$user = new User(['name' => 'Marcos', 'email' => 'marcosmpar@gmail.com']);

print_r(User::get(['name' => 'chaves'], 'id, name, email'));

echo '<br>';

foreach (User::get([], 'name') as $user) {
    echo $user->name;
    echo '<br>';
}