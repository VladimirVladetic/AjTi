<?php
// Define the directory where PDF files are stored
$pdfDirectory = 'pdf/';

// Get the file name from the query string
$file = isset($_GET['file']) ? $_GET['file'] : '';

// Validate the file name to prevent directory traversal
if (!preg_match('/^[a-zA-Z0-9_\-\.]+\.pdf$/', $file)) {
    die('Invalid file name');
}

// Combine the directory and file name to get the full path to the PDF file
$filePath = $pdfDirectory . $file;

// Check if the file exists
if (!file_exists($filePath)) {
    die('File not found');
}

// Set appropriate headers for PDF content
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filePath));
header('Accept-Ranges: bytes');

// Output the PDF file
readfile($filePath);
