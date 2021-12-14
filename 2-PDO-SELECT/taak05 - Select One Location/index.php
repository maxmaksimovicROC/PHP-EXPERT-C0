<?php 
  $db_user = "root";
  $db_pass = "";
  $db_name = "toolsforever";
  
$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM locations WHERE city='Groningen'";
    $statement = $db->prepare($sql);
    $statement->execute();
    $bart = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($bart as $location) {
            echo '-' . $location['id'] . "<br>";
            echo '-' . $location['name'] . "<br>";
            echo '-' . $location['address'] . "<br>";
            echo '-' . $location['city'] . "<br>";
    }



    
?>