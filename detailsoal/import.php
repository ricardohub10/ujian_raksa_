<?php 
// menghubungkan dengan koneksi
include "../koneksi.php";
// menghubungkan dengan library excel reader
include "../excel_reader2.php";

$idgroup = $_POST['idgroup'];
$jenissoal = $_POST['jenissoal'];

// upload file xls
$target = basename($_FILES['import']['name']) ;
move_uploaded_file($_FILES['import']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['import']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['import']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;


if($jenissoal == 'singlechoice'){
    for ($i=2; $i<=$jumlah_baris; $i++){
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $soal        = $data->val($i, 1);
        $pilihana    = $data->val($i, 2);
        $pilihanb    = $data->val($i, 3);
        $pilihanc    = $data->val($i, 4);
        $pilihand    = $data->val($i, 5);
        $pilihane    = $data->val($i, 6);
        $pilihanbenar= $data->val($i, 7);
        $pembahasan  = $data->val($i, 8);

        // input data ke database (table data_pegawai)
        mysqli_query($mysqli,"insert into soal set 
        idgroup = '$idgroup', 
        soal = '$soal',
        jenissoal = '$jenissoal',
        pilihana = '$pilihana',
        pilihanb = '$pilihanb',
        pilihanc = '$pilihanc',
        pilihand = '$pilihand',
        pilihane = '$pilihane',
        pilihanbenar = '$pilihanbenar',
        pembahasan = '$pembahasan'
        ");
    }
}elseif($jenissoal == 'truefalse'){
    for ($i=2; $i<=$jumlah_baris; $i++){
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $soal        = $data->val($i, 1);
        $pilihanbenar= $data->val($i, 2);
        $pembahasan  = $data->val($i, 3);

        if($pilihanbenar == 1){
            $pilihanbenar = "true";
        }elseif($pilihanbenar == 0){
            $pilihanbenar = "false";
        }

        // input data ke database (table data_pegawai)
        mysqli_query($mysqli,"insert into soal set 
        idgroup = '$idgroup', 
        soal = '$soal',
        jenissoal = '$jenissoal',
        pilihanbenar = '$pilihanbenar',
        pembahasan = '$pembahasan'
        ");
    }
}elseif($jenissoal == 'multipleanswer'){
    for ($i=2; $i<=$jumlah_baris; $i++){
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $soal        = $data->val($i, 1);
        $pilihana    = $data->val($i, 2);
        $pilihanb    = $data->val($i, 3);
        $pilihanc    = $data->val($i, 4);
        $pilihand    = $data->val($i, 5);
        $pilihane    = $data->val($i, 6);
        $pilihanbenar= $data->val($i, 7);
        $pembahasan  = $data->val($i, 8);

        // input data ke database (table data_pegawai)
        mysqli_query($mysqli,"insert into soal set 
        idgroup = '$idgroup', 
        soal = '$soal',
        jenissoal = '$jenissoal',
        pilihana = '$pilihana',
        pilihanb = '$pilihanb',
        pilihanc = '$pilihanc',
        pilihand = '$pilihand',
        pilihane = '$pilihane',
        pilihanbenar = '$pilihanbenar',
        pembahasan = '$pembahasan'
        ");
    }
}elseif($jenissoal == 'shortanswer'){
    for ($i=2; $i<=$jumlah_baris; $i++){
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $soal        = $data->val($i, 1);
        $pilihanbenar= $data->val($i, 2);
        $pembahasan  = $data->val($i, 3);

        // input data ke database (table data_pegawai)
        mysqli_query($mysqli,"insert into soal set 
        idgroup = '$idgroup', 
        soal = '$soal',
        jenissoal = '$jenissoal',
        pilihanbenar = '$pilihanbenar',
        pembahasan = '$pembahasan'
        ");
    }
}elseif($jenissoal == 'sorting'){
    for ($i=2; $i<=$jumlah_baris; $i++){
        // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
        $soal        = $data->val($i, 1);
        $pilihana    = $data->val($i, 2);
        $pilihanb    = $data->val($i, 3);
        $pilihanc    = $data->val($i, 4);
        $pilihand    = $data->val($i, 5);
        $pilihane    = $data->val($i, 6);
        $pilihanbenar= $data->val($i, 7);
        $pembahasan  = $data->val($i, 8);

        // input data ke database
        mysqli_query($mysqli,"insert into soal set 
        idgroup = '$idgroup', 
        soal = '$soal',
        jenissoal = '$jenissoal',
        pilihana = '$pilihana',
        pilihanb = '$pilihanb',
        pilihanc = '$pilihanc',
        pilihand = '$pilihand',
        pilihane = '$pilihane',
        pilihanbenar = '$pilihanbenar',
        pembahasan = '$pembahasan'
        ");
    }
}

//hapus kembali file .xls yang di upload tadi
unlink($_FILES['import']['name']);

// alihkan halaman ke index.php
header('location:http://localhost/pkl/index.php?detailsoal&idgroup='.$idgroup);
?>