<?php

$user = [
    'name' => 'Jane',
    'email' => 'jane@m.com',
    'hobbies' => ['chess', 'music', 'cooking'],
];

echo 'Hello ', $user['name'];
echo $user['hobbies'][1];