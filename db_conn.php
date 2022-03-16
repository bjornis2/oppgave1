<?php

   $sname = "locahost";
   $unmae = "root";
   $password = "";

   $db_name = "test_db";

   $conn = mysql_connect($sname, $unmae, $password, $db_name);

   if(!$conn) {
       echo "connection failed";
   }
