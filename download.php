<?php
$data = json_decode(file_get_contents('php://input'), true);
$pdf_file = $data['pdf_file'] ?? '';
$verification_code = $data['verification_code'] ?? '';

// Validate and sanitize filename
$pdf_file = basename($pdf_file); // Remove any path traversal attempts
$pdf_path = __DIR__ . '/pdf_files/' . $pdf_file;

// Check if file exists
if (!file_exists($pdf_path)) {
    http_response_code(404);
    echo 'File not found: ' . htmlspecialchars($pdf_file);
    exit;
}

// Verify it's a PDF
if (pathinfo($pdf_path, PATHINFO_EXTENSION) !== 'pdf') {
    http_response_code(400);
    echo 'Invalid file type';
    exit;
}

// Send file
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $pdf_file . '"');
header('Content-Length: ' . filesize($pdf_path));
readfile($pdf_path);
?>
