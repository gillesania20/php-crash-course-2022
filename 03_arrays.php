<?php
    // Simple Array
    $numbers = [1, 2, 3, 4, 5];
    $numbers2 = array(1, 2, 3, 4, 5);

    var_dump($numbers);
    echo '<br>';
    var_dump($numbers2);
    echo '<br>';
    echo $numbers[0];
    echo '<br>';
    echo $numbers2[0];
    echo '<br>';

    //Associative Array
    $cars = [
        'car one' => 'Toyota',
        'car two' => 'Honda',
        'car three' => 'Ford'
    ];
    var_dump($cars);
    echo '<br>';
    echo $cars['car one'];
    echo '<br>';
?>