<?php session_start(); ?>
<!doctype html>
<?php
if (isset($_POST['update'])) 
{
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    require_once 'connection.php';
    require_once 'Users.php';

    $dbUsers = new Users($conn);
    print_r($_POST);

  $status = $dbUsers->updateUser($_SESSION['ID'],$firstname,$lastname,$email,$_SESSION['registername'],$password);

  
    if ($status) {
        $success = "Your account has been updated";
    }else{
        $errors[] = "Update failure";
    } 
}
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Picture Libary</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="styles.css">
    <?php
     echo "Hello " . $_SESSION["registername"] . " your ID is: " . $_SESSION["ID"]; 
     ?>
</head>
<body>
 

<?php

include 'header.php';
echo "$header";

?>
</div>
<div class="tab1">     
<form method="post" action="">
                          <p>
                             <label for="username"><h3>Change Firstname:</h3></label>
                             <input type="text" name="firstname" id="firstname" required>
                         </p>
                           <p>
                                <label for="username"><h3>Change lastname:</h3></label>
                               <input type="text" name="lastname" id="lastname" required>
                           </p>
                           <p>
                              <label for="username"><h3>Change email:</h3></label>
                             <input type="text" name="email" id="email" required>
                          </p>                      
                         <p>
                                <label for="pwd"><h3>Change Password:</h3></label>
                                <input type="password" name="password" id="password" required>
                         </p>
         
                         <p>
                             <input class="rText" name="update" type="submit" id="update" value="Update">
                            </p>
 </form>
</div>
<div class="row column text-center">
    <h2>Pics</h2>
    <hr>
</div>
<div class="row small-up-2 large-up-4">
    <div class="column">

    </div>
    <div class="column">

    </div>
    <div class="column">
  
    </div>
    <div class="column">
    
    </div>
</div>
<?php

include 'footer.php';

?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
