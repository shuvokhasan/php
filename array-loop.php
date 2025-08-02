<?php

$users = ['A', 'B', 'C', 'D', 'E', 'F'];

for($i = 0; $i <= 5; $i++){
    echo 'Index ', $i, ' = ', $users[$i];
    echo '<br />';
}

echo '<br />';

foreach($users as $user){
    echo $user, '<br />';
}