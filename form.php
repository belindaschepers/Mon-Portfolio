<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "user";
    $password = "";
    $database = "users";

    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $message = $_POST["message"];
        
    if (!isset($name)){
        die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît entrez votre adresse e-mail");
    }
    if (!isset($message)){
        die("S'il vous plaît entrez votre message");
    }
    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
 }
    $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)"); 
    $statement->bind_param('sss', $name, $email); 

    if($statement->execute()){
        print "Salut " . $name . "!, votre adresse e-mail est ". $email;
      }else{
        print $mysqli->error; 
      }
}
 

?>