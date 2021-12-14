<?php 
  $db_user = "root";
  $db_pass = "";
  $db_name = "toolsforever";
  
$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, firstname, lastname, email FROM users WHERE firstname='Bart'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $bart = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($bart as $users) {
        echo '-' . $users['id'] . "<br>";

        echo '-' . $users['firstname'] . "<br>";

        echo '-' . $users['lastname'] . "<br>";

        echo '-' . $users['email'] . "<br>";
    }






    


























    
?>