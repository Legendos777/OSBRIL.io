<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title> 
    <link rel="stylesheet" href="/css/registr.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Регистрация</h2>
    <form action="/signup.php" method="post">
      <div class="input-box">
        <input class="input100" required type="text" name="full_name" placeholder="ФИО" required>
      </div>
      <div class="input-box">
        <input class="input100" required type="tel" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" name="nomer" placeholder="Номер Телефона">
      </div>
      <div class="input-box">
        <input class="input100" required type="email" name="email" placeholder="email">
      </div>
      <div class="input-box">
        <input class="input100" required type="password" maxLength = 15 minLength = 5 name="password" placeholder="Пароль">
      </div>
      <div class="input-box">
        <input class="input100" required type="password" maxLength = 15 minLength = 5 name="password_repeat" placeholder="Повтор Пароля">
      </div>
      <div class="input-box button">
        <input type="submit" value="Зарегистрироваться">
      </div>
      <div class="text">
        <h3>У вас есть аккаунт?<a href="/avtoriz.php">Войти</a></h3>
      </div>
    </form>
  </div>
</body>
</html>