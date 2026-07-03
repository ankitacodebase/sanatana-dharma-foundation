<?php
$file = __DIR__ . '/Sanatan Dharma- Interest Form- PIO-Others.pdf';
if (file_exists($file)) {
    header('Content-Type: application/pdf');
    readfile($file);
} else {
    http_response_code(404);
    echo 'File not found.';
}
?>
