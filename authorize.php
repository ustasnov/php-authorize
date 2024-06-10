<?php

$authorize_form = <<<EOD
<!DOCTYPE html>
<html>
  <head>
    <title>Homework: deploy on hosting</title>
  </head>
  <body>
    <form action="post.php" method="POST">
      <p>Автор: Угаров С.И.</p>
      <br />
      <label for="user">Введите имя пользователя:</label>
      <input id="user" name="user_name" type="text"></input>
      <br />
      <input type="submit" value="Зарегистрировать" />
    </form>
  </body>
</html>
EOD;
