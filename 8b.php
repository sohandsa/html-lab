<?php
    $mat = Array(Array(1,2), Array(4, 5), Array(7, 8));
    $transpose = Array();
    echo "<html><head><title>Matrix Transpose</title></head><body><h1>Matrix Transpose<br>";
    for($i = 0; $i < count($mat); $i += 1) {
        for($j = 0; $j < count($mat[0]); $j += 1) {
            echo $mat[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "</h1><h1>Transpose of a matrix<br>";

    for($i = 0; $i < count($mat); $i += 1) {
        for($j = 0; $j < count($mat[0]); $j += 1) {
            $transpose[$j][$i] = $mat[$i][$j];
        }
    }
    for($i = 0; $i < count($transpose); $i += 1) {
        for($j = 0; $j < count($transpose[0]); $j += 1) {
            echo $transpose[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "</h1></body></html>";
?>