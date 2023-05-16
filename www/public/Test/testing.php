<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
</head>

<body>
    <?php
    // Define an array of folder names
    $folderNames = ['CSS 1'];

    // Iterate over the folder names and include the PHP script for each folder
    ?>

    <h1>TEST</h1>
    <br>
    <?php
    foreach ($folderNames as $folderName) {
        include '../Test/generateLinks.php';
    }
    ?>
</body>

</html>