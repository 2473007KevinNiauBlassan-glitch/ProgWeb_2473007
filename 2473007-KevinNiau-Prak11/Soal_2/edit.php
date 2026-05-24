<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id='$id'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 500px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 5px; }
        input[type=text] { width: 100%; padding: 8px; margin: 8px 0 15px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 8px 15px; text-decoration: none; color: white; border-radius: 4px; border: none; cursor: pointer; margin-top: 10px; display: inline-block;}
        .btn-update { background-color: #4CAF50; }
        .btn-kembali { background-color: #2196F3; }
    </style>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">Edit Data Siswa</h3>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>
            
            <label>Kelas:</label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" required>
            
            <button type="submit" class="btn btn-update">Update</button>
            <a href="index.php" class="btn btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>