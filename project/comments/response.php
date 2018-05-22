
<?php
$host = 'localhost';
$database = 'comments';
$username = 'michaelpelevin';
$password = 'phpMyAdmin';

$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$date = date("Y-m-d H:i:s");

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Could not connect: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}


$Result = mysql_query("SELECT * FROM comment");

// получаем все записи из таблицы add_delete_record
while($row = mysql_fetch_array($Result))
{
echo '<li id="item_'.$row["id"].'">';
echo '<div class="results"><a href="#" class="del_button" id="del-'.$row["id"].'">';
echo '<img src="images/icon_del.gif" border="0" />';
echo '</a></div>';
echo $row["email"].$row["name"].$row["message"].$row["date"].'</li>';
}

//Закрывает соединение с сервером MySQL
mysql_close($mysqli);
?>