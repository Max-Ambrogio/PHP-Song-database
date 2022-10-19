<?php
$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'root';
         $dbname = 'php_week_2';
         $dbport = '8889';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
// printf('Connected successfully.<br />');
   