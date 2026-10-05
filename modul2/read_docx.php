<?php
$zip = new ZipArchive;
$file = 'd:/laragon/www/PABW/Praktikum/modul2/707012500064_Akmallutfi Afza Gusty_Laporan Praktikum 02.docx';
if ($zip->open($file) === TRUE) {
    $xml = $zip->getFromName('word/document.xml');
    $zip->close();
    $text = strip_tags(str_replace(['<w:p>', '</w:p>', '<w:br/>'], ["\n", "\n", "\n"], $xml));
    echo trim($text);
} else {
    echo "Failed to open zip";
}
