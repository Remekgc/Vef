<?php
use PhpSolutions\File\Upload;

// set the maximum upload size in bytes
$max = 600 * 1024; // 600 KB
if (isset($_POST['upload'])) {
    // define the path to the upload folder
    $destination =  $_SERVER['DOCUMENT_ROOT'] . "/2t/2601983359/VefRemi/Gallery/";
    require_once '/PhpSolutions/File/Upload.php';
    try {
        $loader = new Upload($destination);
        $loader->setMaxSize($max);
        $loader->allowAllTypes();
        $loader->upload();
        $result = $loader->getMessages();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta  charset="utf-8">
    <title>Upload File</title>
</head>

<body>
<?php
if (isset($result)) {
    echo '<ul>';
    foreach ($result as $message) {
        echo "<li>$message</li>";
    }
    echo '</ul>';
}
?>
<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
    <p>
        <label for="image"><h2 class="uploadtext">Upload image:</h2></label>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max; ?>">
        <input type="file" name="image" id="image">
    </p>
    <p>
        <input type="submit" name="upload" id="upload" value="Upload">
    </p>
</form>

</body>
</html>