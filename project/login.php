
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css\styles.css">
  <title>Ярославль</title>
</head>
<body>
<nav class="menu">
   <ul>
  <li id="link"><a href="index.php">Главная</a></li>
  <li id="link"><a href="gallery.php">Галерея</a></li>
  <li id="link"><a href="news.php">Новости</a></li>
  <li id="link" style="float:right"><a href="register.php">Регистрация</a></li>
  <li id="link" style="float:right"><a  class="active" href="login.php">Войти</a></li>
  
</ul>
</nav>
<div class="login">
<form action="scripts\auth\auth.php" method="POST">
   Логин:<br>
       <input type="Email" name="login"><br>
   Пароль:<br>
    <input type="password" name="pass"><br>
    <input type="submit" name = "submit" value="Вход">
    <button><a href="register.php">Регистрация</a></button>
</form>
</div>
<footer>Other interesting information.</footer>
</body>
</html>