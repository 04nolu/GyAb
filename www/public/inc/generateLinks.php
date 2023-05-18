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

    echo ("<h4>" . basename($folderName) . "</h4>");
    echo ("<br>");

    natsort($fileNames);

    foreach ($fileNames as $fileName) {
        echo '<a class="links" href="' . $folderName . '/' . $fileName . '.html">' . $fileName . '</a><br>';
    }
    echo ("<br> <br>");
}
?>