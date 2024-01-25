
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>PHP App</title>
  </head>
  <body>

<?php
    echo abs(-22);
    $number=-4.5;
    $str="Work";
    $nums=array(2,2,2,2);
    $arr=[2,2,3.2,true,'str'];
    $list=["age"=>50,"name"=>"lesha"];
    echo "<b>FreeBot</b>";
    echo "</br>Hi";
    echo "\"Hello $str\"";
    echo ' ' . $number ."hours". $str;
    echo "<input type='text'> FreeBot</input>";
    if($number<0){
        echo 'No';
    }
    else{
        echo 'Yes';
    }
    switch($number){
        case 4.5:
            echo "number=4.5";
            break;
        case -4.5:
            echo "number=-4.5";
            break;
        default:
            echo "No((((";
            break;
    }
    $i=1;
    while($i<=10){
        echo $i . '</br>';
        $i++;
    }
?>
  </body>
</html>
