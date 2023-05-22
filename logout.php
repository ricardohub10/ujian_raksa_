<?php
    include('koneksi.php');
    session_start();

    // Inisialisasi variabel
    $idujian = $_SESSION['idujian'] ?? '';
    $idgroup = $_SESSION['id'] ?? '';
    $iduser = $_SESSION['iduser'] ?? '';

    try {
        // Query SQL
        $tampil = mysqli_query($mysqli, "
            SELECT j.*, s.*
            FROM jawaban AS j
            JOIN soal AS s ON j.idsoal = s.idsoal
            WHERE j.iduser = '$iduser' AND j.idgroup = '$idgroup' AND j.idujian = '$idujian' AND j.jawaban = s.pilihanbenar
        ");

        // Menghitung jumlah jawaban benar
        $jumlah_benar = mysqli_num_rows($tampil);

        // Mengambil jumlah soal
        $s = mysqli_query($mysqli, "SELECT * FROM soal WHERE idgroup = $idgroup");
        $soal = mysqli_num_rows($s);

        // Menghitung nilai
        $nilai = $jumlah_benar * 100 / $soal;

        // // Insert nilai ke dalam tabel
        // $insert = mysqli_query($mysqli, "
        //     INSERT INTO nilai (iduser, idujian, nilai)
        //     VALUES ('$iduser', '$idujian', '$nilai')
        // ");

        // Menghancurkan sesi
       
        $iduser = $_SESSION['iduser'];
        mysqli_query($mysqli, "UPDATE user SET session_id= NULL WHERE iduser='$iduser' ");
        session_destroy();


        header("location:index.php");
    } catch (mysqli_sql_exception $e) {
        // Menangkap exception dan melakukan penanganan
        // Misalnya, memunculkan pesan error atau melakukan tindakan yang sesuai
        echo "Terjadi kesalahan dalam pemrosesan: " . $e->getMessage();
    }
?>
