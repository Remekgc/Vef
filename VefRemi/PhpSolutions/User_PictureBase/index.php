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
    $status = $dbUsers->newUser($firstname,$lastname,$email,$username,$password);

    if ($status) {
        $success = "$username has been registered. You may now log in.";
    }else{
        $errors[] = "$username is already in use. Please choose another username.";
    } 
}

/* Annað dæmi um notkun:
    // Sækjum user (skilar fylki)
    $user = $dbUsers->getUser(1);
    
    // kíkjum í user array
    print_r($user);

    echo "<br>";

    // birtum bara nafnið Konráð (sæti nr. 2 í array)
    echo "$user[1]";
 */

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Register user</title>
    <style>
        label {
            display:inline-block;
            width:125px;
            text-align:right;
            padding-right:2px;
        }
        input[type="submit"] {
            margin-left:132px;
        }
    </style>
</head>

<body>
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
</form>
<?php } ?>
</body>
</html>
