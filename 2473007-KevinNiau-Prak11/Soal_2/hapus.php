<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error menghapus record: " . $conn->error;
}
?>