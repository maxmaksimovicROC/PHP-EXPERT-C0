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
        <form action="config.php" method="post">
            <div class="container">
          
                <div class="row">
                    <div class="col-sm-3">
                        <H1>Log In</H1>
                        <label for="firstname"><b>Firstname</b></label>
                        <input class="form-control" type="text" placeholder="Must fill in"required>

                        <label for="lastname"><b>Lastname</b></label>
                        <input class="form-control" type="text" placeholder="Dont lie " required> 
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="submit" value="naam in db">   
                    </div>
                    </form>
                </div>
            </div>






        
    </body>
</html>