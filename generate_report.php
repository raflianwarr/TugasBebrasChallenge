<?php
// Generator Laporan Keamanan Sederhana

echo "<h1>📊 Generator Laporan Keamanan</h1>";
echo "<p>Pilih format yang diinginkan:</p>";

echo "<div style='margin: 20px 0;'>";
echo "<a href='security_report.php' target='_blank' style='background-color: #3498db; color: white; padding: 15px 25px; text-decoration: none; border-radius: 5px; margin-right: 10px; display: inline-block;'>📄 Lihat Laporan HTML</a>";
echo "<a href='security_report.php' target='_blank' onclick=\"setTimeout(function(){window.print();}, 1000);\" style='background-color: #e74c3c; color: white; padding: 15px 25px; text-decoration: none; border-radius: 5px; margin-right: 10px; display: inline-block;'>🖨️ Cetak Laporan</a>";
echo "</div>";

echo "<h2>📋 Instruksi Konversi ke Word:</h2>";
echo "<ol>";
echo "<li><strong>Metode 1 (Direkomendasikan):</strong>";
echo "<ul>";
echo "<li>Klik 'Lihat Laporan HTML' di atas</li>";
echo "<li>Tekan <kbd>Ctrl+A</kbd> untuk memilih semua konten</li>";
echo "<li>Tekan <kbd>Ctrl+C</kbd> untuk menyalin</li>";
echo "<li>Buka Microsoft Word</li>";
echo "<li>Tekan <kbd>Ctrl+V</kbd> untuk menempel</li>";
echo "<li>Simpan sebagai file .docx</li>";
echo "</ul></li>";

echo "<li><strong>Metode 2 (Cetak ke PDF, lalu Word):</strong>";
echo "<ul>";
echo "<li>Klik 'Cetak Laporan' di atas</li>";
echo "<li>Pilih 'Microsoft Print to PDF' atau 'Save as PDF'</li>";
echo "<li>Simpan PDF tersebut</li>";
echo "<li>Buka PDF di Microsoft Word</li>";
echo "<li>Word akan mengkonversi secara otomatis</li>";
echo "<li>Simpan sebagai file .docx</li>";
echo "</ul></li>";

echo "<li><strong>Metode 3 (Simpan HTML, lalu buka di Word):</strong>";
echo "<ul>";
echo "<li>Klik kanan pada 'Lihat Laporan HTML' → Save Link As</li>";
echo "<li>Simpan sebagai 'laporan_keamanan.html'</li>";
echo "<li>Buka file HTML di Microsoft Word</li>";
echo "<li>Simpan sebagai file .docx</li>";
echo "</ul></li>";
echo "</ol>";

echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;'>";
echo "<h3>✅ Fitur Laporan Ini:</h3>";
echo "<ul>";
echo "<li>✅ <strong>Format profesional</strong> dengan tabel dan warna</li>";
echo "<li>✅ <strong>Layout ramah cetak</strong></li>";
echo "<li>✅ <strong>Mudah copy-paste</strong> ke Word</li>";
echo "<li>✅ <strong>Analisis keamanan lengkap</strong> dengan strategi mitigasi</li>";
echo "<li>✅ <strong>Jadwal implementasi</strong> dan prioritas</li>";
echo "<li>✅ <strong>Contoh kode</strong> untuk perbaikan kritis</li>";
echo "</ul>";
echo "</div>";

echo "<p><a href='index.php'>← Kembali ke Halaman Utama</a></p>";
?>