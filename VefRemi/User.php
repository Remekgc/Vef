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

                    <?php if ($_POST) { print_r($_POST); } ?>

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


