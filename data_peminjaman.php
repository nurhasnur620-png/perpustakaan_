<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Peminjaman - Sistem Perpustakaan</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 40px; background-color: #f4f7f6; }
        nav { margin-bottom: 20px; }
        nav a { text-decoration: none; color: #3498db; font-weight: bold; margin-right: 15px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #3498db; color: white; }
        tr:hover { background-color: #f1f1f1; }
        .btn-delete { color: #e74c3c; text-decoration: none; font-size: 14px; font-weight: bold; }
    </style>
</head>
<body>

    <nav>
        <a href="index.php">Tambah Peminjaman</a> | 
        <a href="data_peminjaman.php">Lihat Riwayat Data</a>
    </nav>

    <h2>Riwayat Peminjaman Buku</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tgl Pinjam</th>
                <th>Durasi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM peminjaman ORDER BY id DESC");
            while($data = mysqli_fetch_array($query)) {
                echo "<tr>
                    <td>{$no}</td>
                    <td>{$data['nama_peminjam']}</td>
                    <td>{$data['judul_buku']}</td>
                    <td>" . date('d-m-Y', strtotime($data['tanggal_pinjam'])) . "</td>
                    <td>{$data['durasi_hari']} Hari</td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>