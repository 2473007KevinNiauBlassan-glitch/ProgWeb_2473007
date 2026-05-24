<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 6px 12px; text-decoration: none; color: white; border-radius: 4px; border: none; cursor: pointer; display: inline-block;}
        .btn-tambah { background-color: #4CAF50; margin-bottom: 10px; }
        .btn-edit { background-color: #2196F3; }
        .btn-hapus { background-color: #f44336; }
    </style>
</head>
<body>
    <div style="max-width: 800px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
        <h2 style="text-align: center;">Data Siswa</h2>
        <a href="tambah.php" class="btn btn-tambah">Tambah Data</a>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            $sql = "SELECT * FROM siswa";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['kelas'] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-edit'>Edit</a>
                            <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>