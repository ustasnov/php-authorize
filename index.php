<?php

session_start();
    
if (empty($_SESSION['user_name'])) {
  include('authorize.php');
  echo $authorize_form;
} else {
  echo '<p>Привет, ' . $_SESSION['user_name'] . '!</p>';
  echo '<br />';
  echo '<a href="exit.php">Выход</a>';
}
