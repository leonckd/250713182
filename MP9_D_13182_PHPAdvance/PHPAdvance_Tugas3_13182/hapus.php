<?php
//1
require 'koneksi.php';

//2
$id = $_GET['id'] ?? '';

//3 & 4
if($id === '' || !ctype_digit($id)){
    echo '<p style="color:red;">!! ID TIDAK VALID !!</p>';
}else{
    $query = 'DELETE FROM film WHERE id = ?';
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
}

//5
if(mysqli_stmt_affected_rows($stmt) === 1){
    echo 'Data berhasil dihapus.';
}else{
    echo 'Data tidak ditemukan.';
}

echo '<a href="index.xhtml">Kembali</a>';
?>