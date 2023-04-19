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
	$kdmapel     = $data->val($i, 1);
	$mapel       = $data->val($i, 2);

	if($kdmapel != "" && $mapel != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($mysqli,"insert into mapel set kdmapel = '$kdmapel', mapel = '$mapel' ");
		$berhasil++;
	}
}

//hapus kembali file .xls yang di upload tadi
unlink($_FILES['import']['name']);

// alihkan halaman ke index.php
header('location:http://localhost/ujian_raksa/index.php?mapel');
?>