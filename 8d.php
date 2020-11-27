<?php
    $mat1 = Array(Array(1, 2), Array(3, 4), Array(5, 6));
    $mat2 = Array(Array(1, 1), Array(2, 2), Array(3, 3));
    echo "<html><head><title>Matrix Multiplication</title></head><body>";
    $res = array();
    echo "<h1>Matrix A:<br>";
    for($i = 0; $i < count($mat1); $i += 1) {
        for($j = 0; $j < count($mat1[0]); $j += 1) {
            echo $mat1[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "</h1>";
    echo "<h1>Matrix B:<br>";
    for($i = 0; $i < count($mat2); $i += 1) {
        for($j = 0; $j < count($mat2[0]); $j += 1) {
            echo $mat2[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "</h1>";
    for($i = 0; $i < count($mat2); $i += 1) {
        for($j = 0; $j < count($mat2[0]); $j += 1) {
            $res[$i][$j] = ($mat1[$i][$j] + $mat2[$i][$j]);
            
        }
    }
    echo "<h1>A + B:<br>";
    for($i = 0; $i < count($res); $i += 1) {
        for($j = 0; $j < count($res[0]); $j += 1) {
            echo $res[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "</h1>";
    echo "</body></html>";
?>