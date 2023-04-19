<?php
include "../koneksi.php";

if (isset($_POST['submit'])) {
    $namauser = $_POST['namauser'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);
    
    $sql_cek_username = mysqli_query($mysqli, "SELECT * FROM user WHERE username = '$username'")or die(mysqli_error($mysqli));
    if(mysqli_num_rows($sql_cek_username) > 0){
        echo "<script>alert('Username sudah pernah digunakan');
        window.history.back();</script>";
    } else{
        $insert = mysqli_query($mysqli, "insert into user set 
        namauser='$namauser',
        jk='$jk',
        tempatlahir='$tempatlahir',
        tgllahir='$tgllahir',
        status='$status',
        username='$username',
        password='$password'");
        if ($insert) {
            echo "<script>alert('proses tambah stock berhasil');'</script>";
            header('location:http://localhost/ujian_raksa_/index.php?user');
        } else {
            echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
        }
    }
  
} else {
    header('location:http://localhost/ujian_raksa_/index.php?user');
}

// 

