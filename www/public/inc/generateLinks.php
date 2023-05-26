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
    echo ('<div class="divProjects">');
    echo ('<ul>');

    echo ("<h3>" . basename($folderName) . "</h3>");
    echo ("<br>");

    natsort($fileNames);

    foreach ($fileNames as $fileName) {
        echo '<li><a href="' . $folderName . '/' . $fileName . '.html">' . $fileName . '</a></li><br>';
    }
    echo ("<br>");

    echo ('</ul>');
    echo ('</div>');
}
?>