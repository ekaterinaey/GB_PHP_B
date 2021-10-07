

<?php

/* 2- е задание */

//echo "Hello, World !!!!!!";

/*$name = "GeekBrains user";
echo "Hello, $name!";*/

/*define('MY_CONST', 100);
echo MY_CONST;*/

/*const my_const = 50;
echo my_const;*/

/*$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";*/

/*$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";*/



/* 3- е задание */

    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    //- значение $a дает true и значение $b дает true, 

    var_dump((int)'012345');     // Почему 12345? 
    //- приведение к целому числу

    var_dump((float)123.0 === (int)123.0); // Почему false?
    //- строгое сравнение дробного и целого числа

    var_dump((int)0 === (int)'hello, world'); // Почему true?
    //- выражение (int)'hello, world' преобразуется в 0

?>


<?php 

/* 4- е задание */

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


<?php 

/* 5- е задание */

$a = 1;
$b = 2;

/* 1- ый вариант */

/*
echo ++$a . '<br>'; // $a = 2
echo --$b . '<br>'; // $b = 1
*/

/* 2- ой вариант */

echo $a = $a + $b . '<br>'; // $a = 3
echo $b = $a - $b . '<br>'; // $b = 1
echo $a = $a - $b; // $a = 2

?>