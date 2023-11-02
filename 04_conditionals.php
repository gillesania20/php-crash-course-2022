<?php
    /*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
    */

    $color = 'unknown';
    switch($color){
        case 'blue':
            echo 'your color is blue';
            break;
        case 'red':
            echo 'your color is red';
            break;
        case 'green':
            echo 'your color is green';
            break;
        default:
            echo 'default color';
    }
?>