
<?php 

  $connectiondb = new mysqli("db", "root", "devjg", "devjg");

  if($connectiondb->connect_error){
    die("Error during connection. Status: Error ".$connectiondb->connect_error);
      
  }

?>