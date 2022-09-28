<?php


    $papere[0] = "cos";
    $papere[1] = "moze";
    $papere[2] = "nie wiem";

    for($j=2; $j >= 0; --$j){
        echo "$papere[$j] <br><br>"; 
    }


    
    $nazwy['1'] = "1985"; 
    $nazwy['2'] = "Wiedźmin";   
    $nazwy['3'] = "Kot w lesie";      


    foreach($nazwy as $item => $description){
        echo "$item: $description <br>";
    }

    echo $nazwy['3'] . " " . $nazwy['2'] . " " . $nazwy['1'];

?>