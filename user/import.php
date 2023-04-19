<!-- import excel ke mysql -->

<?php 
// menghubungkan dengan koneksi
include "../koneksi.php";
// menghubungkan dengan library excel reader
include "../excel_reader2.php";
?>

<?php
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
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$namauser       = $data->val($i, 1);
    $jk             = $data->val($i, 2);
    $tempatlahir    = $data->val($i, 3);
    $tanggal         = $data->val($i, 4);
    $tgllahir        = date('Y-m-d', strtotime($tanggal));
    $status         = $data->val($i, 5);
    $username       = $data->val($i, 6);
    $pass           = $data->val($i, 7);
    $password       = base64_encode($pass); 
    

	if($namauser != "" && $jk != "" && $tempatlahir != "" && $tgllahir != "" && $status != "" && $username != "" && $password != ""){
		// input data ke database (table data_pegawai)
        mysqli_query($mysqli,"insert into user set 
         namauser       = '$namauser', 
         jk             = '$jk', 
         tempatlahir    = '$tempatlahir',
         tgllahir       = '$tgllahir',
         status         = '$status',
         username       = '$username',
         password       = '$password'
         ");
		$berhasil++;
	}
}

//hapus kembali file .xls yang di upload tadi
unlink($_FILES['import']['name']);

// alihkan halaman ke index.php
header('location:http://localhost/ujian_raksa_/index.php?user');
?>