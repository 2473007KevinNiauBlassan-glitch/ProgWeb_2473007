<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 500px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 5px; }
        input[type=text] { width: 100%; padding: 8px; margin: 8px 0 15px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 8px 15px; text-decoration: none; color: white; border-radius: 4px; border: none; cursor: pointer; margin-top: 10px; display: inline-block;}
        .btn-simpan { background-color: #4CAF50; }
        .btn-kembali { background-color: #2196F3; }
    </style>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">Tambah Data Siswa</h3>
        <form action="proses_tambah.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" required>
            
            <label>Kelas:</label>
            <input type="text" name="kelas" required>
            
            <button type="submit" class="btn btn-simpan">Simpan</button>
            <a href="index.php" class="btn btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>