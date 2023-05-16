<?php
if (isset($folderName)) {
    $directory = new DirectoryIterator($folderName);

    $fileNames = [];
    foreach ($directory as $file) {
        if ($file->isFile() && $file->getExtension() === 'html') {
            $fileName = $file->getBasename('.html');
            $fileNames[] = $fileName;
        }
    }

    echo ($folderName);
    echo ("<br> <br>");

    sort($fileNames);

    foreach ($fileNames as $fileName) {
        echo '<a style= text-transform: capitalize; href="' . $folderName . '/' . $fileName . '.html">' . $fileName . '</a><br>';
    }
}
?>