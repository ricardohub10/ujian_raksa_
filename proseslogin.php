<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$session_id = session_id();
$cek_session = mysqli_query($mysqli, "select * from user where session_id = '$session_id'");
if (mysqli_num_rows($cek_session) > 0) {
    // destroy session lama
    $data = mysqli_fetch_array($cek_session);
    $iduser = $data['iduser'];
    mysqli_query($mysqli, "UPDATE user SET session_id='' WHERE iduser='$iduser' ");
    session_destroy();

    echo "<script>alert('Akun anda sedang login');window.history.go(-1);</script>";
} 

$cek = mysqli_query($mysqli, "select * from user where username='$username' and password='$password' ");
if (mysqli_num_rows($cek) > 0) {
    $data = mysqli_fetch_array($cek);
    if ($data['session_id'] == '' || $data['session_id'] == $session_id) {
        // set session data and update session ID in database
        $_SESSION['username'] = $data['username'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['iduser'] = $data['iduser'];
        $_SESSION['namauser'] = $data['namauser'];
        $_SESSION['session_id'] = $session_id;
    
        $iduser = $data['iduser'];
        mysqli_query($mysqli, "UPDATE user SET session_id='$session_id' WHERE iduser='$iduser' ");

        echo "<script>window.location.href='index.php?home'</script>";
    } else {
        // session ID mismatch, do not allow login
        echo "<script>alert('Akun anda sedang login');window.history.go(-1);</script>";
    }
} else {
    echo "<script>alert('periksa kembali username dan password yang anda masukan');window.history.go(-1);</script>";
}
