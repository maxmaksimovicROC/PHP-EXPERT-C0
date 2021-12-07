<?php 
  $db_user = "root";
  $db_pass = "";
  $db_name = "toolsforever";
  
$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);

   

    $sql = 'SELECT * FROM users';
    $statement = $db->prepare($sql);
    $statement->execute();
    $all_users = $statement->fetchAll(PDO::FETCH_ASSOC);

          
    
    foreach ($all_users as $users) {
        echo '-' . $users['id'] . "<br>";

        echo '-' . $users['firstname'] . "<br>";

        echo '-' . $users['lastname'] . "<br>";

        echo '-' . $users['email'] ."<br>";

        echo '-' . $users['password'] ."<br>";

        echo '-' . $users['role'] ."<br>";


        echo "<br>"; 
    }









?>