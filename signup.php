<?php
 include "./includes/common.php";
 if(isset($_SESSION['email'])){
     header('location: flip.php');
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youth Reader|Sign Up</title>
        <!--link of minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jquery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--minified javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>   
            .container{
                width: 90%;
                margin: auto;
                overflow: hidden;
            }
            footer{
                padding: 10px 0px;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        require "./includes/header.php";
        ?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php" >
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" required="" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact" required="" maxlength="10" size="10">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="City" name="city" required="" >
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="address" required="">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
            </div><br><br><br><br><br><br>
        </div><br><br><br/>
        <?php
        require "./includes/footer.php";
        ?>
    </body>
</html>
