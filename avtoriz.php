<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title> 
    <link rel="stylesheet" href="/css/registr.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Вход</h2>
    <form action="/signip.php" method="post">
      <div class="input-box">
        <input class="input100" type="text" name="email" placeholder="email">
      </div>
      <div class="input-box">
        <input class="input100" type="password" name="password" placeholder="Пароль">
      </div>
      <div class="input-box button">
        <input type="submit" value="Войти">
      </div>
      <div class="text">
        <h3>У вас нету аккаунта?<a href="/registr.php">Регистрация</a></h3>
      </div>
    </form>
  </div>
</body>
</html>