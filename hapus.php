<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=jadwal_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=jadwal_id
  $id = $_GET['id'];
  $sql= "DELETE FROM jadwal WHERE jadwal_id='$id'";
  $query = mysqli_query($db,$sql);
  
		
		//jika query DELETE berhasil
		if($query){
      header('Location: index.html?status=sukses');
    }else {
      header('Location: index.html?status=gagal');
		}
		
	}
	else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>