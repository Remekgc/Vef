<!doctype html>
<?php
$errors = [];

if (isset($_POST['register'])) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    require_once 'connection.php';
    require_once 'Users.php';

    $dbUsers = new Users($conn);
    print_r($_POST);

  /*$status = $dbUsers->newUser("Rems","Jens","Fens","Helloh","Kemli");*/
  $status = $dbUsers->newUser($firstname,$lastname,$email,$username,$password);

    if ($status) {
        $success = "$username has been registered. You may now log in.";
    }else{
        $errors[] = "$username is already in use. Please choose another username.";
    } 
}
?>
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
                                    }
                                }
                            }
                            ?>
                    </div>
                </div>
    
                       <h1>Register user</h1>
                      <?php
                        if (isset($success)) {
                            echo "<p>$success</p>";
                     } elseif (isset($errors) && !empty($errors)) {
                          echo '<ul>';
                         foreach ($errors as $error) {
                              echo "<li>$error</li>";
                         }
                         echo '</ul>';
                     }else{
                      ?>
                      <form method="post" action="">
                          <p>
                             <label for="username">firstname:</label>
                             <input type="text" name="firstname" id="firstname" required>
                         </p>
                           <p>
                                <label for="username">lastname:</label>
                               <input type="text" name="lastname" id="lastname" required>
                           </p>
                           <p>
                              <label for="username">email:</label>
                             <input type="text" name="email" id="email" required>
                          </p>
                           <p>
                             <label for="username">username:</label>
                             <input type="text" name="username" id="username" required>
                          </p>
                         <p>
                                <label for="pwd">Password:</label>
                                <input type="password" name="password" id="password" required>
                         </p>
         
                         <p>
                             <input name="register" type="submit" id="register" value="Register">
                            </p>
                            <?php 
                            if ($_POST) { print_r($_POST); } 
                            if(isset($_POST['name']))
                            {
                                $_SESSION['registername'] = $_POST["name"];
                                $_SESSION['registerpassword'] = $_POST["password"];
                            }
                        ?>
                      </form>
                      <?php } ?>
                        
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


