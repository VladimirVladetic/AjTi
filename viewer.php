<?php
$pdfDirectory = 'pdf/';

$file = isset($_GET['file']) ? $_GET['file'] : '';

if (!preg_match('/^[a-zA-Z0-9_\-\.]+\.pdf$/', $file)) {
    die('Invalid file name');
}

$filePath = $pdfDirectory . $file;

if (!file_exists($filePath)) {
    die('File not found');
}

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filePath));
header('Accept-Ranges: bytes');

readfile($filePath);
