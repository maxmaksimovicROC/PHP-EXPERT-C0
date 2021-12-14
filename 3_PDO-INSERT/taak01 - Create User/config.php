<?php


$db_user = "root";
$db_pass = "";
$db_name = "toolsforever";

$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);

//gegevens uit een formulier ophalen met de post method.
if(isset($_POST['create'])){
    $firstname    = $_POST['firstname'];
    $lastname     = $_POST['lastname'];
    

-
    $sql = "INSERT INTO user_create (firstname, lastname) VALUES(?,?)";
     $stminsert = $db->prepare($sql);
     $result = $stminsert->execute([$firstname, $lastname ]);    
      if ($result) {
        echo 'Account opgeslagen u kunt nu inloggen.';
      }else{
        echo 'Er ging iets fout probeer het opnieeuw.';
      }
  }


?>