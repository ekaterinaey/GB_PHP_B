

<form enctype="multipart/form-data" method="post" action="index.php">
    <input type="number" name="number1"><br/>
    <input type="number" name="number2"><br/>
    <select name="operation">
        <option value="sum">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select>
    <input type="submit" name="submit" value="Значение">
</form>



<?php


if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
} 

if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')){
    $error_result = 'Заполните все поля';

}else {
    if(!is_numeric($number1) || !is_numeric($number2)){
        $error_result = "Операнды должны быть числами";
    } else {
        switch($operation){
            case 'sum' :
                $result = $number1 + $number2;
                break;
            case 'subtraction' :
                $result = $number1 - $number2;
                break; 
            case 'multiplication' :
                $result = $number1 * $number2;
                break;
            case 'division' :
                if( $number2 == 0){
                    $error_result = "На ноль делить нельзя";
                } else {     
                $result = $number1 / $number2;
                break; 
                }  
            
        }
    }
}

if(isset($error_result)){
    echo "Ошибка: $error_result";
} else {
    echo "Ответ $result";
}

?>
<hr>

<form enctype="multipart/form-data" method="post" action="index.php">
    <input type="text" name="username" placeholder="Имя"><br/>
    <input type="email" name="email" placeholder="E-mail"><br/>
    <textarea rows="10" cols="45" name="comment" placeholder="Комментарий"></textarea><br/>
    <input type="submit" name="send" value="Отправить"><br/>

</form>

<?php

if(isset($_POST['send'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $date = date("Y-m-d H:i:s");

    $message = "От " . $username . " < $email > " . "<br/>" . $comment . "<br/>" . $date;
  
  mail($username, $email, $message);
  echo "Комментарий отправлен <br/>" . $message;
} 
?>