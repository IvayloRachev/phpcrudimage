<?php
$dsn = "mysql:host=localhost;dbname=cinema";
$username = "root";
$password = "";
$options = [];
$connection = new PDO($dsn, $username, $password, $options);
try {

   // echo "connexion reussie";
} catch(PDOException $e){
    print "error :" . $e->getMessage();
    die();
}