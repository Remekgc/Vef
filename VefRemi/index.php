<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <?php 
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

<?php

include 'header.php';
echo "$header";

?>


</div>

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li  class="orbit-slide is-active">
          
            <img src="<?php echo $MainMynd; ?>">
 <!--
        <li class="orbit-slide">
            <img src="http://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
            <img src="http://placehold.it/2000x750">
        </li>
    </ul>
    -->
</div>
<div class="row column text-center">
    <h2>Our Newest Movies</h2>
    <hr>
</div>
<div class="row small-up-2 large-up-4">
    <div class="column">
        <img src="<?php echo $bMynd1; ?>">
        <h5>Point Break</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd2; ?>">
        <h5>Batman</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd3; ?>">
        <h5>DeadPool</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd4; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
</div>
<div class="row column text-center">
    <h2>Some Other Neat Products</h2>
    <hr>
</div>
<div class="row small-up-2 medium-up-3 large-up-6">
    <div class="column">
        <img src="<?php echo $LbMynd1; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $LbMynd2; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $LbMynd3; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $LbMynd4; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $LbMynd5; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
    <div class="column">
       <img src="<?php echo $LbMynd6; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button small expanded hollow">Buy</a>
    </div>
</div>
<hr>
<div class="row column text-center">
    <h2>More Movies</h2>
    <hr>
</div>
<div class="row small-up-2 large-up-4">
    <div class="column">
        <img src="<?php echo $bMynd1; ?>">
        <h5>Point Break</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd2; ?>">
        <h5>Batman</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd3; ?>">
        <h5>DeadPool</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
    </div>
    <div class="column">
        <img src="<?php echo $bMynd4; ?>">
        <h5>Nulla At Nulla Justo, Eget</h5>
        <p>$400</p>
        <a href="#" class="button expanded">Buy</a>
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


