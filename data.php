<?php 
include 'config/koneksi.php';

// Membuat data santri
for ($i = 1; $i <= 2212; $i++) {
    $no_induk = "NIK" . str_pad($i, 6, "0", STR_PAD_LEFT);
    $nama_lengkap = "Santri " . $i;
    $alamat = "Jl. Raya No. " . $i;
    $kecamatan = "Kecamatan " . $i;
    $kabupaten = "Kabupaten " . $i;
    $wali = "Wali " . $i;
    $no_wa = "0812345670" . str_pad($i, 2, "0", STR_PAD_LEFT);
    $program_hafalan = "Program " . chr(65 + ($i % 26)); 
    $tahun_ajaran = "2023/2024";
    $status = "Aktif";
    
    // Query untuk memasukkan data
    $sql = "INSERT INTO tbl_data_santri (pas_foto, no_induk, nama_lengkap, alamat, kecamatan, kabupaten, wali, no_wa, program_hafalan, tahun_ajaran, status, create_at, update_at) VALUES
    ('', '$no_induk', '$nama_lengkap', '$alamat', '$kecamatan', '$kabupaten', '$wali', '$no_wa', '$program_hafalan', '$tahun_ajaran', '$status', NOW(), NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully for $nama_lengkap<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>