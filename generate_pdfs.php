<?php
// Make sure the pdf_files folder exists
$pdf_folder = __DIR__ . '/pdf_files';
if (!is_dir($pdf_folder)) {
    mkdir($pdf_folder, 0755, true);
    echo "<p>Created pdf_files folder.</p>";
}

// Read the JSON file
$json_file = 'data_sekolah.json';
$json_data = file_get_contents($json_file);
$data = json_decode($json_data, true);

if ($data === null) {
    die("Error reading JSON file");
}

$created_files = [];
$unique_schools = [];

// Get unique schools and their info
foreach ($data as $item) {
    $school_name = $item['sekolah'];
    if (!isset($unique_schools[$school_name])) {
        $unique_schools[$school_name] = $item;
    }
}

// Generate PDF for each unique school
foreach ($unique_schools as $school_name => $item) {
    $pdf_filename = $item['pdf_file'];
    $pdf_path = $pdf_folder . '/' . $pdf_filename;
    
    // Delete existing file to recreate it
    if (file_exists($pdf_path)) {
        unlink($pdf_path);
    }
    
    // Create PDF content
    $content = createPDF("test pdf file per school");
    
    file_put_contents($pdf_path, $content);
    $created_files[] = "CREATED: $pdf_filename";
}

function createPDF($text) {
    $pdf = "%PDF-1.4\n";
    $pdf .= "1 0 obj\n<</Type /Catalog /Pages 2 0 R>>\nendobj\n";
    $pdf .= "2 0 obj\n<</Type /Pages /Kids [3 0 R] /Count 1>>\nendobj\n";
    $pdf .= "3 0 obj\n<</Type /Page /Parent 2 0 R /MediaBox [0 0 612 792] /Contents 4 0 R /Resources <</Font <</F1 5 0 R>>>>>>\nendobj\n";
    
    $stream = "BT\n/F1 12 Tf\n50 700 Td\n(" . addslashes($text) . ") Tj\nET\n";
    $pdf .= "4 0 obj\n<</Length " . strlen($stream) . ">>\nstream\n" . $stream . "endstream\nendobj\n";
    $pdf .= "5 0 obj\n<</Type /Font /Subtype /Type1 /BaseFont /Helvetica>>\nendobj\n";
    $pdf .= "xref\n0 6\n0000000000 65535 f\n0000000009 00000 n\n0000000058 00000 n\n0000000115 00000 n\n0000000273 00000 n\n0000000500 00000 n\n";
    $pdf .= "trailer\n<</Size 6 /Root 1 0 R>>\nstartxref\n600\n%%EOF";
    
    return $pdf;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDF Generation Report</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h2 { color: #333; }
        ul { line-height: 1.8; }
        .success { color: green; }
        .skipped { color: orange; }
        a { margin-top: 20px; display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h2>PDF Generation Report</h2>
    <ul>
        <?php foreach ($created_files as $file): ?>
            <li class="<?php echo strpos($file, 'CREATED') !== false ? 'success' : 'skipped'; ?>">
                <?php echo htmlspecialchars($file); ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Back to Main Page</a>
</body>
</html>
