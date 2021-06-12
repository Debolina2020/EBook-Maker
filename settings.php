<?php
include "./includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--settings page-->
<html>
    <head>
        <title>Youth Reader|Settings</title>
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
        </style>
    </head>
    <body>
        <?php
        require "./includes/header.php";
	?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="container"><br><br><br><br>
            <div class="row row_style4">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> Change Password </h1>
                    <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b>
                    </div>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Old Password" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="New Password" name="newpassword">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Re-type New Password" name="renewpassword">
                        </div>
                        <button class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
