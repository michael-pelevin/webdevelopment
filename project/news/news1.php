
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <script type="text/javascript" src="../js/ajax.js"></script>
  <link rel="stylesheet" href="../css/styles.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <title>Ярославль</title>
</head>
<body>
<nav class="menu">
   <ul>
  <li id="link"><a href="../index.php">Главная</a></li>
  <li id="link"><a href="..\gallery.php">Галерея</a></li>
  <li id="link"><a class="active" href="..\news.php">Новости</a></li>
  <li id="link" style="float:right"><a href="..\register.php">Регистрация</a></li>
  <li id="link" style="float:right"><a href="..\login.php">Войти</a></li>
  
</ul>
</nav>
<div class="row">
<div class="col-9 col-m-12">
<div class="content">
   <img src="../images/news/1.jpg" alt="учения" title="Фото с сайта мэрии Ярославля" width="250" height="150" style="float: left">
    <p>Главное Управление МЧС России по Ярославской области проведело крупномасштабное пожарно-тактическое учение в торговом центре «Аура». Были задействованы все пожарные части города, оперативные службы, скорая помощь, полиция.<br /><br />
Также были привлечены руководители 36 торговых центров и представители арендаторов. На момент проведения учений в торговом центре находилось примерно 100 посетителей.<br /><br />

В ходе учения была отработана эвакуация посетителей и персонала при срабатывании пожарной сигнализации и тушение пожара на объекте с массовым пребыванием людей. Время эвакуации составило 12 минут, что соответствует нормативам.<br /><br />

За последнее время мэрией города Ярославля совместно с администрациями торговых центров были проведены внутренние проверки 45 торговых центров. По результатам проверок были выявлены нарушения, которые оперативно устраняются.<br /><br />

Также ведется работа по обращениям граждан, которые поступают в единую дежурно-диспетчерскую службу города Ярославля по номеру 40-40-40. Все жалобы отрабатываются в обязательном порядке.</p>
<a href="news2.html" style="float: right; text-decoration: none">Следующая</a>
<div class="add_comment">
<form action="../comments/add_comment.php" name="add" method="POST">
   Email:</br>
       <input type="Email" name="email"></br>
   Имя:</br>
    <input type="text" name="name"></br>
    Комментарий:</br>
    <input type="text" name="message">
    <input type="submit" name = "submit" onclick="main.js" value="Добавить">
</form>
</div>

</div>

<div class='commentBlock'>
    
    <?php
        $servername='localhost';
$username="michaelpelevin";
$password="phpMyAdmin";
$database="comments";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Could not connect: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}

$query = "SELECT email, name, message, date FROM comment ORDER BY id DESC";


$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_ASSOC);
do
{
	printf("<div style=\"border:1px solid black\"><p>Email: " .$row["email"] . "<br>  Name: " .$row["name"]. "<br>    Time   " .$row["date"] ."</p> 
	<p><i>Message</i></p><p>" .$row["message"] . "</p>---------<br/></div>"
	);
}
while($row = mysqli_fetch_array($result));

$result->free();

$mysqli->close();
    ?>
     
</div>
</div>
<div class="col-3 col-m-12">
    <aside>
        <h2>Полезное</h2>
        <p><a href="https://ru.wikipedia.org/wiki/%D0%AF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D1%8C" target="_blank">Ярославль-Википедия</a></p>
        <p><a href="https://www.tripadvisor.ru/Tourism-g298488-Yaroslavl_Yaroslavl_Oblast_Central_Russia-Vacations.html" target="_blank">Ярославль 2018</a></p>
        <p><a href="https://www.101hotels.ru/main/cities/yaroslavl" target="_blank">Гостиницы Ярославля</a></p>
    </aside>
</div>
</div>
<footer>Other interesting information.</footer>
</body>