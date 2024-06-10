<?php

session_start();

if (!empty($_POST['user_name'])) {
  $_SESSION['user_name'] = $_POST['user_name'];
}

header('Location: index.php', true);
