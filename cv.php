<?php
// Get the file path
$file = 'files/cvdoload.pdf'; // change the path and name as needed

// Check if file exists
if (file_exists($file)) {
    // Set headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    flush(); // Flush system output buffer
    readfile($file); // Read the file
    exit;
} else {
    echo "File not found.";
}
?>
