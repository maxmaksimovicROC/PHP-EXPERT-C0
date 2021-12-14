 <?php
require_once('config.php');

?>



<!DOCTYPE html>
<html>
    <head>
       
        <title>login</title>
     
        <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    </head>
    <body>
        <div>
            <?php
                    if(isset($_POST['create'])){
                        $firstname    = $_POST['firstname'];
                        $lastname     = $_POST['lastname'];
                            

                        -
                        $sql = "INSERT INTO user_create (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;        
                        $stmt = $db->prepare($sql); 
                        $stmt->bindParam(":ph_firstname", $firstName ); 
                        $stmt->bindParam(":ph_lastname", $lastName ); 
                        $stmt->execute();  
                    }
            ?>
        </div>
        <form action="index.php" method="post">
        
                <div class="row">
                    <div class="col-sm-3">
                        <H1>Log In</H1>
                        <label for="firstname"><b>Firstname</b></label>
                        <input class="form-control" type="text" placeholder="Must fill in" required>

                        <label for="lastname"><b>Lastname</b></label>
                        <input class="form-control" type="text" placeholder="Dont lie" required> 
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit" value="naam in db">   
                    </div>
                    </form>
                </div>
            






        
    </body>
</html>