<?php

    // Array is an idexed variable, starts form 0
    $fruits = array('apple', 'banana', 'mango', 'orange', 'olive');
    //                 0        1         2         3        4


    $countries = ['Bangladesh', 'Myanmar', 'India', 'Nepal', 'Bhutan', 'China',];

    echo $fruits[2];

    echo var_dump($fruits);
    echo '<br /><br />';
    print_r($countries);

    $numbers = [3, 5, 8, 10, 23];
    echo max($numbers);
    echo min($numbers);
    
    echo max($countries);
    echo min($countries);

    // Array Mutation (Arrays are mutable)
    $countries[1] = 'Srilanka';
    print_r($countries);

    echo '<br /><br />';    

    // Adding values to existing array
    $countries[] = 'America';
    print_r($countries);

    // Removing values from existing array
    unset($countries[3]);
    print_r($countries);

    // Re-indexing array after rermoving
    $countries = array_values($countries);
    echo '<br /><br />';
    print_r($countries);

?>
    
