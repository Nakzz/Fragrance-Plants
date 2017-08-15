<?php

  require_once(dbinfo_local.php);

  $db_connect= @mysqli_connect(db_hostname, db_username, db_password, db_database)
OR die('Could not connect to MySQL: ' .

mysqli_connect_error());


 ?>
