<?php

include "koneksi.php";


$iduser = $_POST['iduser'];
$session_id = $_POST['session_id'];

// Lakukan validasi dan koneksi ke database sesuai kebutuhan

// Update session_id menjadi NULL
mysqli_query($mysqli, "UPDATE user SET session_id = NULL WHERE iduser = '$iduser'");
?>
