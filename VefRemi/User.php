<?php session_start(); ?>
<!doctype html>
<?php
$errors = [];

if (isset($_POST['register'])) 
{
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
 if (isset($_POST['login']))
{
      $username = trim($_POST['name']);
      $password = trim($_POST['password']);
      require_once 'connection.php';
      require_once 'Users.php';
      $dbUsers = new Users($conn);
      $check = $dbUsers->validateUser($username,$password);

      if ($check == 1) {

        
            $_SESSION['registername'] = $_POST["name"]; 
            $_SESSION['registerpassword'] = $_POST["password"];
            
            $servername = "tsuts.tskoli.is";
            $username = "2601983359";
            $password = "ramos123";

            try {
                $connection = new PDO("mysql:host=$servername;dbname=2601983359_pictureBase", $username, $password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $connection->exec('SET NAMES "utf8"'); 
                }
            catch(PDOException $e)
                {
                echo "Connection failed, try again later: " . $e->getMessage();
                }
          require_once 'Users.php';

         $sql = 'SELECT userID FROM Users WHERE userName = "'.$_SESSION['registername'].'" AND userPassword = "'.$_SESSION['registerpassword'].'";';
         
         $query = $connection->prepare($sql);
                  try
                  {
                   $result = $connection->query($sql);
                  }
                  catch(PDOException $ex)
                  {
                    echo "Error fetching record: " . $e->getMessage();
                  }
            while($row = $result->fetch())
                          {
                            $_SESSION['ID'] = $row[0];
                          }
                    
         
         header('Location: http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php');

      }     

      else
      {
        echo "Wrong username and password";
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
    
                <div class="tab1">     
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
                                    <input name="login" type="submit" id="login" value="Login">
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
                                    }
                                }
                            }
                            ?>
                    </div>
                </div>
    <div class="tab1">   
                       <h3 class="rText">Register</h3>
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
                             <input class="rText"name="register" type="submit" id="register" value="Register">
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


