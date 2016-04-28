<?php
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

   $sql = 'SELECT userID FROM Users WHERE userName = "admin" AND userPassword = "admin";';
   
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
                      echo $row[0];
                    }
                    
?>