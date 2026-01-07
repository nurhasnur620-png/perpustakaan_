<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Peminjaman - Sistem Perpustakaan</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 40px; background-color: #f4f7f6; }
        nav { margin-bottom: 20px; }
        nav a { text-decoration: none; color: #3498db; font-weight: bold; margin-right: 15px; }
        .container { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #2ecc71; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #27ae60; }
    </style>
</head>
<body>

    <nav>
        <a href="index.php">Tambah Peminjaman</a> | 
        <a href="data_peminjaman.php">Lihat Riwayat Data</a>
    </nav>

    <div class="container">
        <h2>Form Peminjaman Buku</h2>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label>Nama Lengkap Peminjam</label>
                <input type="text" name="nama_peminjam" placeholder="Masukkan nama..." required>
            </div>
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku" placeholder="Judul buku yang dipinjam..." required>
            </div>
            <div class="form-group">
                <label>Tanggal Peminjaman</label>
                <input type="date" name="tanggal_pinjam" required>
            </div>
            <div class="form-group">
                <label>Durasi (Hari)</label>
                <input type="number" name="durasi_hari" min="1" placeholder="Lama pinjam..." required>
            </div>
            <button type="submit" name="submit">Simpan Data</button>
        </form>
    </div>

</body>
</html>