<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Buku</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php'; // Menghubungkan ke database

                $sql = "SELECT * FROM buku"; // Query untuk memilih semua data dari tabel buku
                $result = $conn->query($sql); // Menjalankan query

                if ($result->num_rows > 0) {
                    // Menampilkan data jika ada
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['judul']}</td>
                            <td>{$row['penulis']}</td>
                            <td>{$row['penerbit']}</td>
                            <td>{$row['tahun_terbit']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                }

                $conn->close(); // Menutup koneksi
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
