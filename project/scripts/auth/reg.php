<?php
require_once 'db_conn.php';

$name=trim($_POST['name']);
$login=trim($_POST['login']);
$pass=trim($_POST['pass']);


$login=$mysqli->real_escape_string($login);
$name=$mysqli->real_escape_string($name);
$pass=$mysqli->real_escape_string($pass);

if(!empty($name) && !empty($login) && !empty($pass) )
{
    $sql_check = 'SELECT EXISTS(SELECT login FROM without_reg WHERE login=:login)';
    $stmt_check = $mysqli->prepare($sql_check);
    $params = [':login' => $login];
    
    
    
    if($stmt_check -> fetch()){
        die('user with that username already registered');
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);

mysqli_select_db($mysqli, $database) or die( "Unable to select database");

$query = "INSERT INTO without_reg 
          VALUES('','$pass','','$name','$login','')";
$result = mysqli_query($mysqli, $query) or die("Error " . mysqli_error($mysqli)); 

echo("Вы успешно зарегистрированы!");

}else{
echo "Заполните все поля!";
}
 $mysqli->close();
?>