<?php
   $db = new PDO("mysql:host=localhost;dbname=smartped_webapp", "smartped_wp632", "pSb@7318[4", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
?>