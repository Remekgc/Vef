<?php
 require_once 'connection.php';
    require_once 'Users.php';

    $dbUsers = new Users($conn);

// Annað dæmi um notkun:
    // Sækjum user (skilar fylki)
    $user = $dbUsers->getUser(1);
    
    // kíkjum í user array
    print_r($user);

    echo "<br>";

    // birtum bara nafnið Konráð (sæti nr. 2 í array)
    echo "$user[1]";
    ?>