<?php
  include "./includes/common.php";
 if(isset($_SESSION['email'])){
     header('location: flip.php');
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youth Reader|Login</title>
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
        <p>&nbsp;</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                        <h4>LOGIN</h4>
                        </div><br/>
                        <div class="container text-warning"><p>Login to create your own eBook</p></div><br/>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php" >
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="" pattern=".{6,}">
                                    
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        </div>
                    </div>
                    <div class="panel-footer"><p>Don't have an account?<a href="Signup.php">Register</a></p>
                    </div><br><br><br><br><br><br><br>
                </div><br><br><br><br><br><br><br><br><br><br><br>
            </div><br/>
        </div>
        <?php
        require "./includes/footer.php";
        ?>
    </body>
</html>
