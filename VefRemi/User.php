<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body><!-- <?php 
            $MainMynd = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Main.jpg";
            $bMynd1 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/PointBreak.jpg";
            $bMynd2 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Batman.jpg";
            $bMynd3 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/DeadPool.jpg";
            $bMynd4 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/StarTrek.jpg";
            $LbMynd1 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Taken.jpg";
            $LbMynd2 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/BatmanOld.jpg";
            $LbMynd3 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Robocop.jpg";
            $LbMynd4 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Hercules.jpg";
            $LbMynd5 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Water.jpg";
            $LbMynd6 = "http://tsuts.tskoli.is/2t/2601983359/VefRemi/Myndir/Cove.jpg";
            
?>
-->
<?php

include 'header.php';
echo "$header";

?>
<div class="mother">
<div class="tabs">
    
                <div class="tab">
                    <label for="tab-1"><h3>Login</h3></label>
       
                    <div class="content">
                        <form class="pure-form">
                            <fieldset class="pure-group">
                                <input type="text" class="pure-input-1-2" placeholder="Username">
                                <input type="text" class="pure-input-1-2" placeholder="Password">
                                <input type="email" class="pure-input-1-2" placeholder="Email">
                            </fieldset>
                            <button type="submit" class="BTNlog">Sign in</button>
                        </form>
                    </div> 
                </div>
    
                <div class="tab">
                    <label for="tab-2"><h3>Register</h3></label>               
                    <div class="content">
                        <form class="pure-form pure-form-aligned">
                            <div class="pure-control-group">
                                <input id="name" type="text" placeholder="Username" reguired>
                            </div>

                            <div class="pure-control-group">
                                <input id="password" type="password" placeholder="Password" reguired>
                            </div>

                            <div class="pure-control-group">
                                <input id="email" type="email" placeholder="Email Address" reguired>
                            </div>

                            <div class="pure-control-group">
                                <input id="foo" type="text" placeholder="First dog name...">
                            </div>

                            <div class="pure-controls">
                                <label for="cb" class="pure-checkbox">
                                    <input id="cb" type="checkbox"> I've read the terms and conditions
                                </label>

                                <button type="submit" class="BTNreg">Register</button>
                            </div>
                        </form>
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


