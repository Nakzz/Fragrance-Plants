# Online-Store-Fragrance-Plants-Flowers

Online Store Website for Fragrance Plants and Flowers.

*Create db/config.php
    <?php

    $db_username = 'root'; 
    $db_password = 'a';     
    $db_name = 'project';   
    $db_host = 'localhost';


    //connect to MySql
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    ?>



TO IMPORT PRODUCTS FROM IMAGES TO MYSQL
  - run assets/img/CSV.py
  - list.csv is created based on JPG's in products
  - run productImport.py to create tables with the product using the following code
  python productImport.py --user=MYSQL_USERNAME --password=MYSQL_PASSWORD --database=MYSQL_DATABASE --table=products list.csv


HTML PHP CSS
