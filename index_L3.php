
<?php 
/*  1- задание*/

$i = 0;

while ($i <= 100) {
    if ($i%3 == 0){
        echo $i++ . ",";
    }
    $i++;
}

?>
<br>

<?php 
/*  2- задание*/

$i = 0;

do {
    if ($i == 0){
        echo $i . " - Это ноль <br>" ;
    } else if ($i%2 !== 0) {
        echo $i . " - Это нечетное число <br>";
    } else {
        echo $i . "- Это четное число <br>";;
    }
    $i++;

} while ($i <=10)

?>
<br>

<?php 
/*  3- задание*/

$area = [
    'Московская область' => ['Москва', 'Ногинск', 'Балашиха'],
    'Ленинградская область' => ['Санкт-Петербург', 'Кронштадт', 'Гатчина', 'Выборг'],
    'Рязанская область' => ['Рязань', 'Спасск-Рязанский', 'Шацк'],
    'Тверская область' => ['Тверь', 'Калязин', 'Ржев']

];

foreach ($area as $key =>$values){
        echo $key . ': <br>';
   foreach ($values as $value){
       echo $value . ',';
   }
   echo '<br>';
}

?>

<br>

<?php

/* 4- задание */
function a($string){

    $arr = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    ];

    return strtr($string, $arr);

}

echo a("баба яга костяная нога");

?>

<br>

<?php

/* 5 - задание*/

function trans($string) {
    return str_replace(" ", "_", $string);
}

 echo trans("Жили у бабуси два веселых гуся");

?>

<br>

<?php

/* 6 - задание*/

$title = 'MySite';
$date = date('Y-m-d');
$h3 = 'Menu';

$menuArr = [
    'Женская одежда' => ['Платья', 'Юбки', 'Нижнее белье'],
    'Мужская одежда' => ['Рубашки', 'Брюки', 'Нижнее белье']
];


$m = menu($menuArr);

function menu($arr){

    $ul[] = '<ul>';
    
    foreach($arr as $key => $value){
        if(is_array($value)){
            $ul[] = '<li>' . $key . menu($value) . '</li>';
        } else {
            $ul[] = '<li>' . $value . '</li>';
        }
    }

    $ul[] = '/<ul>';
    return implode($ul);
}


?>

<html>
    <head>
        <title><?= $title?></title>
    </head>
    <body>
       <h3><?= $h3?></h3> 
        <nav><?= $m?></nav>       
    </body>
    <footer>
        <span><?= $date ?></span>
    </footer>
</html>

<br>
<hr>


<?php
/* 7 - задание*/


for($i = 0; $i <= 9; print " " . $i++){

};

?>

<br>

<?php 
/*  8- задание*/

$area = [
    'Московская область' => ['Москва', 'Ногинск', 'Балашиха'],
    'Ленинградская область' => ['Санкт-Петербург', 'Кронштадт', 'Гатчина', 'Выборг'],
    'Рязанская область' => ['Рязань', 'Спасск-Рязанский', 'Шацк'],
    'Тверская область' => ['Тверь', 'Калязин', 'Ржев', 'Кашин']

];

foreach ($area as $key){
   foreach ($key as $value){
       if(mb_substr($value, 0, 1)  == "К"){
        echo $value . ',';
       }
   }
   echo '<br>';
}

?>

<br>

