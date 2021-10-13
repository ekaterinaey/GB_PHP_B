
<?php 
/*  1- задание*/

$a = 15;
$b = -30;

if ($a >= 0 and $b >= 0) {
    echo $a - $b;
} else if ($a <= 0 and $b <= 0) {
    echo $a * $b;
}else {
    echo $a + $b; 
}

?>
<br>

<?php 
/*  2- задание*/

$a = 3;

switch ($a){
    case 0:
        echo '0,';
          
    case 1:
         echo '1,' ;
         
    case 2:
        echo '2,' ;
         
    case 3:
        echo '3,' ;
           
    case 4:
         echo '4,' ;
           
    case 5:
        echo '5,' ;
          
    case 6:
        echo '6,' ;
         
    case 7:
         echo '7,' ;
           
    case 8:
        echo '8,' ;
           
    case 9:
         echo '9,' ;
           
     case 10:
          echo '10,' ;
            
     case 11:
          echo '11,' ;
           
     case 12:
          echo '12,' ;
            
     case 13:
          echo '13,' ;
            
     case 14:
          echo '14,' ;
          
    case 15:
         echo '15' ;
         break;
    default:
    echo "Число не в диапазоне от 0 до 15";  
}

?>
<br>
<?php 
/*  3- задание*/

function sum($x, $y){
    return $x + $y;
}

function dif($x, $y){
    return $x - $y;
}

function mult($x, $y){
    return $x * $y;
}

function div($x, $y){
    return $x / $y;
}

echo sum(5, 10);
echo dif(5, 10);
echo mult(5, 10);
echo div(5, 10);
?>
<br>
<?php 
/*  4- задание*/

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
        case 'sum':
            return $arg1 + $arg2;
            break;
        case 'dif':
            return $arg1 - $arg2;
            break;
        case 'mult':
             return $arg1 * $arg2;
             break;
        case 'div':
             return $arg1 / $arg2;
             break;
        default:
        echo "Я не знаю такой операции";
    }

}

echo mathOperation(5, 5, 'dif');

?>

<br>
<?php

/*  5- задание*/
$title = 'MySite';
$date = date('Y-m-d');
$h1 = 'Hello, World !';
?>

<html>
    <head> 
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $h1 ?></h1>
    </body>

    <footer> 
        <span><?= $date ?></span>
    </footer> 
</html>

<br>
<?php 
/*  6- задание*/

function power($val, $pow){
    if ($pow == 1) {
        return $val;

    }else {
        return $val * power($val, $pow - 1);
    }
    
}

echo power(3, 3);

?>

<br>
<?php
/*  7- задание*/

$h = date("H");
$m = date("i");


function time_current($h){
    if ($h == 1 || $h == 21){  
       return $h ." " .'час';
    
    }else if ( $h >= 5 || $h <= 20 ){
        return $h ." " .'часов';
    }else {
        return $h ." " .'часа';
    }
}   


function minut($m){
    switch($m){
        case 1:
        case 21:
        case 31:
        case 41:
        case 51: 
            return "$m минута";
            break;
        case 22: 
        case 23:
        case 24:
        case 32: 
        case 33:
        case 34:
        case 42: 
        case 43:
        case 44:
        case 52: 
        case 53:
        case 54:  
            return "$m минуты";
            break;
        default:
        return "$m минут";
}
}


echo time_current($h)." " .minut($m);


?>

