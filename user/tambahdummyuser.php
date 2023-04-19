<?php
include '../koneksi.php';
require_once('../vendor/autoload.php');
use Faker\Factory;
$faker = Factory::create('iduser_ID');
for($i=1;$i<=50;$i++){
	$nama = $faker->name;
	$jeniskelamin = $faker->randomElement($array = array ('laki-laki','perempuan'));
    $tmptlahir = $faker->state;
    $tgllahir = $faker->date(); // DateTime('2003-03-15 02:00:49', 'Antartica/Vostok')
    $status = $faker->randomElement($array = array ('siswa')); // 'b'
	$username = $faker->userName;
    $password = $faker->randomElement($array = array ('123456789'));
	mysqli_query($mysqli,"INSERT INTO user (namauser,jk,tempatlahir,tgllahir,status,username,password) VALUES('$nama','$jeniskelamin','$tmptlahir',' $tgllahir','$status','$username','$password')");
}
header("location:../index.php?user");
?>