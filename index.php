<?php
    $upper_limit = 10;
    
    for($i = 0; $i < $upper_limit; $i++){
        if($i % 2 == 0){
            echo "<p style='color: green'> " . $i. "</p>";
        }else{
            echo "<p style='color: blue' > " . $i. "</p>";
        }
    }
    
?>
