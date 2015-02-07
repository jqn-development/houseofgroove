<?php
  session_start();
  //turns off error reporting
  //error_reporting(0);

  require 'database/connect.php';
  require 'functions/general.php';
  require 'functions/users.php';

  $errors = array();
?>
