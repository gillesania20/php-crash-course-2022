<?php
    // echo - Output strings, number, html, etc
    echo 123, 'Hello', 10.5;
    echo '<br>';
    // print - Works like echo, but can only take in a single argument
    print 123;
    echo '<br>';
    // print_r() - Print single values and arrays
    print_r([1, 2, 3]);
    echo '<br>';
    // var_dump() - Returns more info like data type and length
    var_dump('Hello');
    echo '<br>';
    // var_export() - Similar to var_dump(). Outputs a string representation of a variable
    var_export('Hello');
?>