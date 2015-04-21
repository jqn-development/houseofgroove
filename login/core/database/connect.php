<?php
  //Local
  $connect_error = 'Sorry, we\'re experiencing connection issues.';
  mysql_connect('localhost', 'root', 'root') or die($connect_error);
  mysql_select_db(hog) or die($connect_error);

  //remote
  // $connect_error = 'Sorry, we\'re experiencing connection issues.';
  // mysql_connect('db560325848.db.1and1.com', 'dbo560325848', 'kino1708') or die($connect_error);
  // mysql_select_db(db560325848) or die($connect_error);
?>
