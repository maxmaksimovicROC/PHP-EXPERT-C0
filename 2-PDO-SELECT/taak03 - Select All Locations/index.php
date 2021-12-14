<?php 
  $db_user = "root";
  $db_pass = "";
  $db_name = "toolsforever";
  
$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);

   

    $sql = 'SELECT * FROM locations';
    $statement = $db->prepare($sql);
    $statement->execute();
    $all_users = $statement->fetchAll(PDO::FETCH_ASSOC);

    
    
    
    foreach ($all_users as $locations) {
    echo '-' . $locations['id'] . "<br>";

    echo '-' . $locations['name'] . "<br>";

    echo '-' . $locations['address'] . "<br>";

    echo '-' . $locations['city'] ."<br>";

    echo "<br>";

    }




?>