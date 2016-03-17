<?php
$activepage = basename($_SERVER['SCRIPT_FILENAME']);
$header = "";
if ($activepage == 'index.php' ) {

    $header = '<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><h2>Movie Store</h2></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/index.php"><h3>Home</h3></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/Admin.php">Admin</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/User.php">Guest(Login/Register)</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php">Picture Libary/Upload Photos</a></li>
        </ul>
    </div>
</div>';
}
else if ($activepage == 'Admin.php')
{
   $header = '<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><h2>Movie Store</h2></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/Admin.php"><h3>Admin</h3></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/index.php">Home</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/User.php">Guest(Login/Register)</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php">Picture Libary/Upload Photos</a></li>
        </ul>
    </div>
</div>';
}
else if ($activepage == 'User.php')
{
   $header = '<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><h2>Movie Store</h2></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/User.php"><h3>Guest(Login/Register)</h3></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/index.php">Home</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/Admin.php">Admin</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php">Picture Libary/Upload Photos</a></li>
        </ul>
    </div>
</div>';
}
else if ($activepage == 'PictureLibary.php')
{
   $header = '<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><h2>Movie Store</h2></li>
            <li><a href=http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php"><h3>Picture Libary/Upload Photos</h3></a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/index.php">Home</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/Admin.php">Admin</a></li>
            <li><a href="http://tsuts.tskoli.is/2t/2601983359/VefRemi/PictureLibary.php">Picture Libary/Upload Photos</a></li>
        </ul>
    </div>
</div>';
}


?>