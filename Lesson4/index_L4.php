<?php

/* 1 - задание*/

$title = 'MySite';
$date = date('Y-m-d');
?>

<br>


<html>
    <head>
        <title><?= $title?></title>
    </head>
    <body>
        <a href="img/123.jpg" target="_blank" title="Full-size">
            <img class="photos" src="img/123.jpg" alt="123" width="150" height="150">  
        </a>   
        <a href="img/124.jpg" target="_blank" title="Full-size">
            <img class="photos" src="img/124.jpg" alt="124" width="150" height="150">  
        </a>  
        <a href="img/456.jpg" target="_blank" title="Full-size">
            <img class="photos" src="img/456.jpg" alt="456" width="150" height="150">  
        </a>  
        <a href="img/457.jpg" target="_blank" title="Full-size">
            <img class="photos" src="img/457.jpg" alt="457" width="150" height="150">  
        </a> 
        
        <form action="#" enctype="multipart/form-data" method="post">
        <p>Загрузите картинку</p>
        <input type="file" name="photo" multiple accept="image/jpeg,image/svg,image/png ">
        <input type="submit" value="Отправить">
        </form>
    </body>
    <footer>
        <span><?= $date ?></span>
    </footer>
</html>

<hr>
<br>

<html>
    <head>
    </head>
    <body>
        <?php
        /* 2 - задание*/

        $images = scandir('img');
        foreach ($images as $image){
            if (is_file('img/' . $image)){  
        ?>

        <a href="img/<?php echo $image ?>" target="_blank" title="Full-size">
            <img class="photos" src="img/<?php echo $image ?>" alt="img" width="150" height="150">  
        </a>   
         
        <?php 
             }
            }
        ?> 
    </body>
    <footer>
        <span><?= $date ?></span>
    </footer>
</html>


