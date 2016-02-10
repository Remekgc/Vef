<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Verkefni 4</title>
		
	</head>
	<body>
			<?php
	$servername = "tsuts.tskoli.is";
	$username = "2601983359";
	$password = "ramos123";

	try {
	    $connection = new PDO("mysql:host=$servername;dbname=2601983359_verk4php", $username, $password);
	    // set the PDO error mode to exception
	    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connection->exec('SET NAMES "utf8"'); 
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed, try again later: " . $e->getMessage();
	    }
	?>
<?php 
	$name1 = $_POST['Name'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$name2 = $_POST['Name2D'];

	if (condition) {
		$sql = "DELETE FROM guests
				WHERE name = $name2;"
	}
	if (strlen($phone) == 7 && is_numeric($phone) && strpos($email,'@'))
	 {
		$sql = "INSERT INTO guest (name,email,phone)
		 VALUES ('$name1','$email','$phone')";
		$query = $connection->prepare( $sql );
		        $query->execute();

		$guestid = "SELECT guest.id_guest 
		FROM guest 
		WHERE guest.name = '$name1' 
		and guest.email = '$email' 
		and guest.phone = '$phone'";
		$query = $connection->prepare( $guestid );
		        $query->execute();

		        $results = $query->fetchAll( PDO::FETCH_BOTH );

		foreach ($results as $row)
	    {
			$ID = $row['id_guest'];
	    }

		echo "you have been registered successfully to event: ";

		if(isset($_POST['event1'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (1,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();
		$select = "SELECT event.event_name, COUNT(event.id_event) FROM event 
				   join guest_has_event ON(event.id_event = guest_has_event.id_event)
				   WHERE event.event_name = 'Paintball'
				   GROUP BY event.id_event;
				   ";
				    $result = $connection-> query($select);
			   foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";		   
			   }
		}

		if (isset($_POST['event2'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (2,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();	
		       $select = "SELECT event.event_name, COUNT(event.id_event) FROM event 
			   join guest_has_event ON(event.id_event = guest_has_event.id_event)
			   WHERE event.event_name = 'CS:GO lan'
			   GROUP BY event.id_event;
			   ";
			    $result = $connection-> query($select);
			  foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";
			   }
		}
		if (isset($_POST['event3'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (3,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();	
		        $select = "SELECT event.event_name, COUNT(event.id_event) FROM event 
			   join guest_has_event ON(event.id_event = guest_has_event.id_event)
			   WHERE event.event_name = 'Lan'
			   GROUP BY event.id_event;
			   ";

			    $result = $connection-> query($select);
			   foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";
			   }
		}
		if (isset($_POST['event4'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (4,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();	
		         $select = "SELECT event.event_name, COUNT(event.id_event) FROM event 
			   join guest_has_event ON(event.id_event = guest_has_event.id_event)
			   WHERE event.event_name = 'Football Game'
			   GROUP BY event.id_event;
			   ";

			    $result = $connection-> query($select);
			   foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";
			   }
		}
		if (isset($_POST['event5'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (5,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();
		         $select = "SELECT event.event_name, COUNT(event.id_event) FROM event 
			   join guest_has_event ON(event.id_event = guest_has_event.id_event)
			   WHERE event.event_name = 'Laser Tag'
			   GROUP BY event.id_event;
			   ";

			    $result = $connection-> query($select);
			   foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";
			   }
		}
		if (isset($_POST['event6'])) 
		{
		$sql = "INSERT INTO guest_has_event (id_event, id_guest) VAlUES (6,'$ID')";
		$query = $connection->prepare( $sql );
		        $query->execute();

		         $select = "SELECT event.event_name, COUNT(event.id_event) as count FROM event 
			   join guest_has_event ON(event.id_event = guest_has_event.id_event)
			   WHERE event.event_name = 'Tenis Game'
			   GROUP BY event.id_event;
			   ";

			   $result = $connection-> query($select);
			   foreach ($result as $row) {
			   	echo $row['event_name'];
			   	echo ", miði numer: " . $row['COUNT(event.id_event)'] . " ";
			   }		}
	}	
	else
	{
		echo "Símanúmer eða Email eru gild " ;
	}
?>		
	</body>
</html>
