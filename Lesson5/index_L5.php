
<?php
require_once 'db.php';
//$link = mysqli_connect('localhost', 'root', '123456', 'php_base_b');
$result = mysqli_query($link, 'select * from images where 1 order by viewed desc');
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="/full_size.php?image_id=' . $row['id'] . '">';
    echo '<img width="150" height="150" src="' . $row['image_path'] . '">';
    echo '</a>';
}

?>
