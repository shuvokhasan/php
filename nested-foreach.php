<?php

$names = ['John', 'Jane', 'Jenny', 'Peter', 'Potts'];

$users = [
    ['name' => 'Wanda', 'email' => 'wow-wanda@a.com'],
    ['name' => 'Tony', 'email' => 'cool.tony@a.com'],
    ['name' => 'Peter', 'email' => 'wowpete@a.com'],
    ['name' => 'Bruce', 'email' => 'bruceb@a.com'],
    ['name' => 'Widow', 'email' => 'bwidow@a.com'],
];

// foreach($names as $index => $name){
//     echo $index, ' : ', $name , '<br />';
// }

foreach($users as $user){
    echo $user['name'], ' : ', $user['email'], '<br />';
}