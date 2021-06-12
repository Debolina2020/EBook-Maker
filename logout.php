<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<!--logout page-->
<html>
    <head>
        <title>Log Out</title>
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
        <div>
            <?php
                require "./includes/header.php";
            ?>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br/><br/>
            <?php
                require "./includes/footer.php";
            ?>
        </div>
    </body>
</html>