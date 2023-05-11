<?php
include "../koneksi.php";
session_start();

if (isset($_POST['submit'])) {
    $iduser = $_POST['iduser'];
    $listpeserta = $_POST['listpesertaujian'];
    $listgrupmapel = $_POST['listgrupmapel'];

    // var_dump($listgrupmapel);
    // var_dump($listpeserta);
    // die();
    // $namagroup = $_POST['namagroup'];
    // $idmapel = $_POST['idmapel'];
    // var_dump($listgrupmapel);
    // var_dump($listpeserta);
    // die();
    // $select = mysqli_query($mysqli,
    // "select uj.idujian
    // from user_ujian as uj
    // inner join setujian as sj
    // on sj.id_ujian = uj.idujian
    // and u.iduser = '$_SESSION[iduser]'
    // ");
    
// contoh
    // $data = mysqli_fetch_array($select);

    // $cekduplikatuserujian = mysqli_query($mysqli,"SELECT iduser from user_ujian where iduser = $iduser");
    // $cekduplikatujian = mysqli_query($mysqli,"SELECT idujian from user_ujian where idujian = $listgrupmapel");

    $sql_cek_userujian = mysqli_query($mysqli, "SELECT * FROM user_ujian WHERE iduser = '$iduser' AND idujian = '$listgrupmapel'")or die(mysqli_error($mysqli));
    if(mysqli_num_rows($sql_cek_userujian) > 0){
        echo "<script>alert('User tersebut sudah terdaftar ujian');
        window.history.back();</script>";
    } else{
        foreach ($listpeserta as $userid)
        $insert = mysqli_query($mysqli, "insert into user_ujian set 
       
        idujian='$_POST[listgrupmapel]',
        iduser='$userid'
        ");
        var_dump($listpeserta_str);
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





  

//     if (){
//         echo "<script>alert('Maaf User yang dipilih telah terdaftar untuk ujian tertentu');
//         history.back()
//         </script>";
//     }else{
//         $insert = mysqli_query($mysqli, "insert into user_ujian set 
//         idujian='$_POST[listgrupmapel]',
//         iduser='$_POST[listpesertaujian]',
//         ");
//         if ($insert) {
//             echo "<script>alert('proses tambah stock berhasil');'</script>";
//             header('location:http://localhost/ujian_raksa_/index.php?user');
//         } else {
//             echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
//         }
//     } 
// } else {
//     header('location:http://localhost/ujian_raksa_/index.php?user');
// }







  