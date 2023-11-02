<?php
    $items = ['item one', 'item two', 'item three'];

    // Get array length.
    echo count($items) . '<br>';

    // Search array.
    var_dump(in_array('item two', $items));
    echo '<br>';
    
    // Add to array.
    $items[] = 'item four';
    array_push($items, 'item five', 'item six');
    array_unshift($items, 'item zero');
    var_dump($items);
    echo '<br>';

    // Remove from array.
    array_pop($items);
    array_shift($items);
    unset($items[2]);
    var_dump($items);
    echo '<br>';

    // Split into 2 chunks.
    $chunked_array = array_chunk($items, 2);
    var_dump($chunked_array);
    echo '<br>';

    // Concat arrays.
    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $arr3 = [7, 8, 9];
    $arrayMerged = array_merge($arr1, $arr2, $arr3);
    var_dump($arrayMerged);
    echo '<br>';
    $spread = [...$arr1, ...$arr2, ...$arr3];
    var_dump($spread);
    echo '<br>';

    // Make a associative array.
    $a = ['a', 'b', 'c'];
    $b = ['1', '2', '3'];
    $combined = array_combine($a, $b);
    var_dump($combined);
    echo '<br>';
    $flipped = array_flip($combined);
    var_dump($flipped);
    echo '<br>';

    // Make an array based on range.
    $numbers = range(1, 10);
    var_dump($numbers);
    echo '<br>';
    
    // Make a new array.
    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    var_dump($newNumbers);
    echo '<br>';

    // Filter array.
    $filteredNumbers = array_filter($numbers, function($number) {
        if($number === 5){
            return false;
        }else{
            return true;
        }
    });
    var_dump($filteredNumbers);
    echo '<br>';

    // Reduce array.
    $sum = array_reduce($numbers, function($carry, $number) {
        return $carry + $number;
    });
    var_dump($sum);
    echo '<br>';

?>