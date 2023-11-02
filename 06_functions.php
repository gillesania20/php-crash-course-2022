<?php
    // Function declaration.
    function myFunc($x){
        var_dump($x);
        echo '<br>';
        return null;
    }
    $test = ['1', '2', '3'];
    myFunc($test);

    // Function default arguments.
    function myFunc2($default = 'default'){
        var_dump($default);
        echo '<br>';
        return null;
    }
    myFunc2();

    // Anonymous Function.
    $anonymousFunc = function($x = 'anonymous'){
        var_dump($x);
        echo '<br>';
        return null;
    };
    $anonymousFunc();

    // Arrow function.
    $arrowFunc = fn($x = 'arrow function') => $x;
    echo $arrowFunc() . '<br>';
?>