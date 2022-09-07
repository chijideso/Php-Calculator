<?php

function calculator($num1, $oper, $num0){
    $sum;
    switch($oper){
        case "add":
            $sum = $num1 + $num0;
            break;
        case "sub":
            $sum = $num1 - $num0;
            break;
            default:
            $sum = "ther was an error";
            break;
    }
    return $sum;
}
    if(isset ($_POST["btn"])){
    
     $num1 = $_POST["num1"];
  $oper = $_POST["oper"];
  $num0 = $_POST["num0"];

    echo "value: " . calculator($num1, $oper, $num0);

    }

    ?>