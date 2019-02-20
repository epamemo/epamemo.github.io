<?php 
include ("koneksi.php");
if (isset($_POST['tambah'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$organisasi = $_POST['organisasi'];
	$jabatan = $_POST['jabatan'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];

	$sql = "INSERT INTO jadwal (jadwal_id, nama, organisasi, jabatan, tempat, tanggal, jam)
	VALUE ('NULL', '$nama', '$organisasi', '$jabatan', '$tempat', '$tanggal', '$jam') ";
	$query = mysqli_query($db,$sql);
	if ($query){
		header('Location: index.html?status=sukses');
	}else {
		header('Location: index.html?status=gagal');}
	}else{
		die("Akses Dilarang");
	}	
 ?>
<!--if(isset($_POST['tambah'])){
mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
	include('koneksi.php');
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$id		= $_POST['id'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$organisasi		= $_POST['organisasi'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jabatan	= $_POST['jabatan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$tempat	= $_POST['tempat'];	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query("INSERT INTO jadwal(jadwal_id, nama, organisasi, jabatan, tempat) VALUES('$id', '$nama', '$organisasi',$jabatan, '$tempat')") or die(mysqli_error());
	
	//jika query input sukses
	if($input){
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
	}else{
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
	}
}else{	//jika tidak terdeteksi tombol tambah di klik
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}-->