<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Movie store</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include 'header.php';
echo "$header";

?>
<div class="mother">
<div class="tabs">
    
                <div class="tab">     
                    <div class="content">
                        <label for="tab-2"><h3>Login</h3></label>  
                        <div class="content">
                            <form method="post" action="">
                                <p>
                                    <label for="name">Name:</label>
                                    <input name="name" id="name" type="text">
                                </p>
                                <p>
                                    <label for="Password">Password:</label>
                                    <input name="password" id="password" type="password">
                                </p>
                                <p>
                                    <input name="send" type="submit" value="Login">
                                </p>
                            </form>
                        </div> 

                        <?php
                            if(isset($_SESSION['registername']) && isset($_POST["name"]))
                            {
                                if ($_SESSION['registername'] == $_POST["name"]) 
                                {
                                    if ($_SESSION['registerpassword'] == $_POST["password"]) 
                                    {
                                        $_SESSION['userlogged'] = $_SESSION['registername'];
                                        $_SESSION['userpassword'] = $_SESSION['registerpassword'];
                                        unset($_SESSION['registername']);
                                        unset($_SESSION['registerpassword']);
                                        header('Location: http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php');
                                        echo "Wtf am I doing here";
                                    }
                                }
                            }
                            ?>
                    </div>
                </div>
    
                <div class="tab">
                    <label for="tab-2"><h3>Register</h3></label>  
                    <div class="content">
                    <form method="post" action="">

                        <p>

                        <label for="name">Name:</label>

                        <input name="name" id="name" type="text">

                        </p>

                         <p>

                        <label for="Password">Password:</label>

                        <input name="password" id="password" type="password">

                        </p>

                        <p>

                        <label for="email">Email:</label>

                        <input name="email" id="email" type="email">

                        </p>

                        <p>

                        <input name="send" type="submit" value="Register">

                        </p>

                    </form>
                        
                        <pre>

                        <?php 
                            if ($_POST) { print_r($_POST); } 
                            if(isset($_POST['name']))
                            {
                                $_SESSION['registername'] = $_POST["name"];
                                $_SESSION['registerpassword'] = $_POST["password"];
                            }
                        ?>

                        </pre>
          
                </div>
                </div> 
            </div>
<?php

include 'footer.php';

?>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>


