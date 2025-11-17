<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Mitigasi Risiko Keamanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #2c3e50;
        }
        .critical {
            background-color: #ffe6e6;
            color: #d32f2f;
            font-weight: bold;
        }
        .high {
            background-color: #fff3e0;
            color: #f57c00;
            font-weight: bold;
        }
        .medium {
            background-color: #fffde7;
            color: #f9a825;
            font-weight: bold;
        }
        .low {
            background-color: #f1f8e9;
            color: #689f38;
            font-weight: bold;
        }
        .status-bad {
            color: #d32f2f;
            font-weight: bold;
        }
        .priority-p0 {
            color: #d32f2f;
            font-weight: bold;
        }
        .priority-p1 {
            color: #f57c00;
            font-weight: bold;
        }
        .priority-p2 {
            color: #1976d2;
            font-weight: bold;
        }
        .priority-p3 {
            color: #689f38;
            font-weight: bold;
        }
        .summary-table {
            max-width: 600px;
            margin: 20px auto;
        }
        .timeline-table {
            max-width: 800px;
            margin: 20px auto;
        }
        .recommendations {
            background-color: #f8f9fa;
            padding: 20px;
            border-left: 5px solid #3498db;
            margin: 20px 0;
        }
        .download-note {
            background-color: #e8f5e8;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }
        @media print {
            body { margin: 20px; }
            .download-note { display: none; }
        }
    </style>
</head>
<body>

<div class="download-note">
    <strong>📄 Untuk menyimpan sebagai dokumen Word:</strong> Tekan Ctrl+P → Pilih "Microsoft Print to PDF" atau "Save as PDF" → Buka PDF di Word → Simpan sebagai .docx
</div>

<h1>🛡️ LAPORAN MITIGASI RISIKO KEAMANAN</h1>
<p style="text-align: center; color: #666; font-size: 16px;">
    <strong>Bebras Challenge 2025 - Sistem MKS</strong><br>
    Dibuat: <?php echo date('d-m-Y H:i:s'); ?>
</p>

<h2>📊 ANALISIS RISIKO KEAMANAN DETAIL</h2>

<table>
    <thead>
        <tr>
            <th>Kategori Risiko</th>
            <th>Kerentanan Saat Ini</th>
            <th>Tingkat Dampak</th>
            <th>Strategi Mitigasi</th>
            <th>Prioritas</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Path Traversal</strong></td>
            <td>Penggabungan file langsung memungkinkan serangan ../</td>
            <td class="critical">🔴 KRITIS</td>
            <td>Implementasi validasi basename() + realpath()</td>
            <td class="priority-p0">P0 - Segera</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Autentikasi Lemah</strong></td>
            <td>Token MD5 yang dapat diprediksi berdasarkan tanggal</td>
            <td class="critical">🔴 KRITIS</td>
            <td>Token HMAC-SHA256 dengan kedaluwarsa + nonce</td>
            <td class="priority-p0">P0 - Segera</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Akses File Langsung</strong></td>
            <td>File PDF dapat diakses tanpa verifikasi</td>
            <td class="critical">🔴 KRITIS</td>
            <td>Aturan penolakan .htaccess + penyajian file aman</td>
            <td class="priority-p0">P0 - Segera</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Pembatasan Tingkat</strong></td>
            <td>Tidak ada perlindungan terhadap serangan brute force</td>
            <td class="high">🟠 TINGGI</td>
            <td>Pembatasan tingkat berbasis IP dengan jendela waktu</td>
            <td class="priority-p1">P1 - Tinggi</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Validasi Input</strong></td>
            <td>Validasi minimal pada input pengguna</td>
            <td class="high">🟠 TINGGI</td>
            <td>Sanitasi input komprehensif</td>
            <td class="priority-p1">P1 - Tinggi</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Keamanan Transport</strong></td>
            <td>Tidak ada penegakan HTTPS</td>
            <td class="high">🟠 TINGGI</td>
            <td>Implementasi SSL/TLS</td>
            <td class="priority-p1">P1 - Tinggi</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Pengungkapan Informasi</strong></td>
            <td>Pesan error detail mengungkap jalur file</td>
            <td class="medium">🟡 SEDANG</td>
            <td>Pesan error generik dalam produksi</td>
            <td class="priority-p2">P2 - Sedang</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Keamanan Sesi</strong></td>
            <td>Tidak ada manajemen sesi atau proteksi CSRF</td>
            <td class="medium">🟡 SEDANG</td>
            <td>Penanganan sesi aman + token CSRF</td>
            <td class="priority-p2">P2 - Sedang</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Penanganan Error</strong></td>
            <td>Error PHP terekspos kepada pengguna</td>
            <td class="medium">🟡 SEDANG</td>
            <td>Nonaktifkan tampilan error dalam produksi</td>
            <td class="priority-p2">P2 - Sedang</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
        <tr>
            <td><strong>Penyimpanan File</strong></td>
            <td>Data sensitif dalam file JSON</td>
            <td class="medium">🟡 SEDANG</td>
            <td>Pindah ke database terenkripsi</td>
            <td class="priority-p3">P3 - Rendah</td>
            <td class="status-bad">❌ Belum Diperbaiki</td>
        </tr>
    </tbody>
</table>

<h2>📈 RINGKASAN PENILAIAN RISIKO</h2>

<table class="summary-table">
    <thead>
        <tr>
            <th>Tingkat Risiko</th>
            <th>Jumlah</th>
            <th>Persentase</th>
            <th>Tindakan yang Diperlukan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="critical">🔴 KRITIS</td>
            <td><strong>3</strong></td>
            <td><strong>30%</strong></td>
            <td class="priority-p0">Perbaikan Segera Diperlukan</td>
        </tr>
        <tr>
            <td class="high">🟠 TINGGI</td>
            <td><strong>3</strong></td>
            <td><strong>30%</strong></td>
            <td class="priority-p1">Perbaiki Dalam 1 Minggu</td>
        </tr>
        <tr>
            <td class="medium">🟡 SEDANG</td>
            <td><strong>4</strong></td>
            <td><strong>40%</strong></td>
            <td class="priority-p2">Perbaiki Dalam 1 Bulan</td>
        </tr>
    </tbody>
</table>

<h2>🚀 JADWAL IMPLEMENTASI</h2>

<table class="timeline-table">
    <thead>
        <tr>
            <th>Fase</th>
            <th>Deliverable</th>
            <th>Pengurangan Risiko</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Minggu 1</strong></td>
            <td>Perbaikan kritis: Path traversal, Token lemah, Akses file langsung</td>
            <td style="background-color: #e8f5e8; font-weight: bold; color: #2e7d32;">Pengurangan risiko 60%</td>
        </tr>
        <tr>
            <td><strong>Minggu 2</strong></td>
            <td>Prioritas tinggi: Rate limiting, Validasi input, HTTPS</td>
            <td style="background-color: #e8f5e8; font-weight: bold; color: #2e7d32;">Pengurangan risiko 85%</td>
        </tr>
        <tr>
            <td><strong>Bulan 1</strong></td>
            <td>Revisi keamanan lengkap: Sesi, Penanganan error, Database</td>
            <td style="background-color: #c8e6c9; font-weight: bold; color: #1b5e20;">Pengurangan risiko 95%</td>
        </tr>
    </tbody>
</table>

<div class="recommendations">
    <h2>💡 REKOMENDASI UTAMA</h2>
    
    <h3>1. TINDAKAN SEGERA (Minggu Ini):</h3>
    <ul>
        <li><strong>Perbaiki kerentanan path traversal</strong> menggunakan basename() dan realpath()</li>
        <li><strong>Implementasi token HMAC aman</strong> sebagai pengganti MD5 yang dapat diprediksi</li>
        <li><strong>Tambahkan file .htaccess</strong> untuk mencegah akses PDF langsung</li>
    </ul>

    <h3>2. JANGKA PENDEK (Minggu Depan):</h3>
    <ul>
        <li><strong>Implementasi rate limiting</strong> untuk mencegah serangan brute force</li>
        <li><strong>Tambahkan validasi input komprehensif</strong> dan sanitasi</li>
        <li><strong>Aktifkan HTTPS</strong> dengan konfigurasi SSL yang tepat</li>
    </ul>

    <h3>3. JANGKA PANJANG (Bulan Ini):</h3>
    <ul>
        <li><strong>Implementasi manajemen sesi aman</strong></li>
        <li><strong>Ganti penyimpanan JSON</strong> dengan database terenkripsi</li>
        <li><strong>Tambahkan logging komprehensif</strong> dan monitoring</li>
    </ul>
</div>

<h2>🔧 CONTOH KODE UNTUK PERBAIKAN KRITIS</h2>

<h3>1. Perbaikan Path Traversal:</h3>
<pre style="background-color: #f8f9fa; padding: 15px; border-left: 5px solid #28a745;">
// Kode Rentan Saat Ini ❌
$pdf_path = 'pdf_files/' . $file;

// Implementasi Aman ✅
function validateFilePath($filename) {
    $safe_filename = basename($filename);
    $pdf_path = realpath('pdf_files/' . $safe_filename);
    $pdf_dir = realpath('pdf_files/');
    
    if (!$pdf_path || strpos($pdf_path, $pdf_dir) !== 0) {
        return false;
    }
    return $pdf_path;
}
</pre>

<h3>2. Implementasi Token Aman:</h3>
<pre style="background-color: #f8f9fa; padding: 15px; border-left: 5px solid #28a745;">
// Token Lemah Saat Ini ❌
$token = md5($file . $code . date('Y-m-d'));

// Token Aman ✅
$secret_key = 'kunci-rahasia-anda-di-sini';
$payload = json_encode([
    'file' => $pdf_file,
    'exp' => time() + 600, // kedaluwarsa 10 menit
    'nonce' => bin2hex(random_bytes(16))
]);
$token = base64_encode($payload . '.' . hash_hmac('sha256', $payload, $secret_key));
</pre>

<h3>3. Pencegahan Akses File Langsung:</h3>
<pre style="background-color: #f8f9fa; padding: 15px; border-left: 5px solid #28a745;">
# Buat .htaccess di direktori pdf_files/
&lt;Files "*"&gt;
    Order Deny,Allow
    Deny from all
&lt;/Files&gt;
</pre>

<hr style="margin: 30px 0; border: 1px solid #ddd;">

<p style="text-align: center; color: #666; font-style: italic;">
    <strong>Laporan Dibuat:</strong> <?php echo date('d-m-Y H:i:s'); ?> | 
    <strong>Sistem:</strong> MKS Bebras Challenge 2025 | 
    <strong>Status:</strong> Audit Keamanan Selesai
</p>

</body>
</html>