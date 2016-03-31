<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Picture Libary</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 

<?php

include 'header.php';
echo "$header";

echo $_SESSION['userlogged'];
echo $_SESSION['userpassword'];
if (isset($_SESSION['userpassword'])) {
    include 'upload.php';
}
?>
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
