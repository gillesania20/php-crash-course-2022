<?php
    $string = 'Hello World haha';

    // Get the length of a string.
    echo strlen($string) . '<br>';

    // Find the position of the first occurence of a substring in a string.
    echo strpos($string, 'o') . '<br>';

    // Find the position of the last occurence of a substring in a string.
    echo strrpos($string, 'o') . '<br>';

    // Reverse a string.
    echo strrev($string) . '<br>';

    // Convert all characters to lowercase.
    echo strtolower($string) . '<br>';

    // Convert all characters to uppercase.
    echo strtoupper($string) . '<br>';

    // Capitalize the first character of each word.
    echo ucwords($string) . '<br>';

    // String replace.
    echo str_replace('World', 'Everyone', $string) . '<br>';

    // Return portion of a string specified by the offset and length.
    echo substr($string, 0, 5) . '<br>';
    echo substr($string, 5) . '<br>';

    // Starts with.
    if(str_starts_with($string, 'Hello') === true){
        echo 'YES <br>';
    }

    // End with.
    if(str_ends_with($string, 'ha') === true){
        echo 'YES <br>';
    }

    // Used for security.
    $string2 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2) . '<br>';

    // Formatted string.
    printf('%s is studying %s<br>', 'JDoe', 'PHP');
    printf('1 + 1 = %d<br>', 1 + 1);
    printf('1 + 1 = %f<br>', 1 + 1);