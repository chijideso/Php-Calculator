<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<style>
    body{
        background-color:black;
        color:white;
        padding-top: 300px;
        
    }
</style>
<body>
    <form action="value.php" method="POST">
    <input type="text" name="num1" placeholder="number 1">
     <label for="choose operation">choose operation</label>
    <select name="oper" id="">
   <option value="add">+</option>
    <option value="sub">-</option>

    </select>
    <input type="text" name ="num0" placeholder='number'>
    <button type ="submit" name ="btn">calculate</button>
</form>
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



    </form>
</body>
</html>