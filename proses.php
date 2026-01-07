<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_peminjam'];
    $buku = $_POST['judul_buku'];
    $tgl  = $_POST['tanggal_pinjam'];
    $durasi = $_POST['durasi_hari'];

    $sql = "INSERT INTO peminjaman (nama_peminjam, judul_buku, tanggal_pinjam, durasi_hari) 
            VALUES ('$nama', '$buku', '$tgl', '$durasi')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php"); // Kembali ke halaman utama
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>