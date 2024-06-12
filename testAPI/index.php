<?php
  $dsn="mysql:host=localhost;dbname=xml";
  try{
    $db=new PDO($dsn,"root","");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected with DB Successfully";
  }catch(PDOException $e){
    echo "can not connect with DB ".$e->getMessage();
  }
  
?>