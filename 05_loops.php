<?php
    /* ----- For Loop ----- */
    /*
    ** For Loop Syntax
        for (initialize; condition; increment) {
            //code to be executed
        }
    */

    for($i = 0; $i < 10; $i++){
        echo $i . '<br>';
    }

    /* ----- While Loop ----- */
    /*
    ** While Loop Syntax
        initialize;
        while(conditon){
            //code to be executed
            increment;
        }
    */

    $i2 = 0;
    while($i2 < 10){
        echo $i2 . '<br>';
        $i2++;
    }

    /*
    ** Do While Loop Syntax
    initialize;
    do {
        //code to be executed
        increment;
    }while(condition);

    do-while loop will always execute the block of code once, even if  the condition is false.
    */

    $i3 = 0;
    do{
        echo $i3 . '<br>';
        $i3++;
    }while($i3 < 10);

    /*
    ** ForEach Loop Syntax
        foreach($array as $value) {
            //code to be executed
        }
    */

    $items = ['item one', 'item two', 'item three'];
    foreach($items as $item){
        echo $item . '<br>';
    }

    $items2 = ['item one', 'item two', 'item three'];
    foreach($items2 as $index => $item2){
        echo $index . ' - ' . $item2 . '<br>';
    }
?>