<?php
$folderName = 'CSS 1';
$directory = new DirectoryIterator($folderName);

$fileNames = [];
foreach ($directory as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $fileName = $file->getBasename('.html');
        $fileNames[] = $fileName;
    }
}

sort($fileNames);

foreach ($fileNames as $fileName) {
    echo '<a href="' . $folderName . '/' . $fileName . '.html">' . $fileName . '</a><br>';
}
?>