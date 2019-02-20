<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- AEMC CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>AEMC-Assist Prototype</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">AEMC-Assist</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="index.html">Beranda <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="tabel.php">Jadwal</a>
        <a class="nav-item btn btn-primary tombol" href="tambah.php">Tambah</a>
      </div>
    </div>
  </div>
</nav>
	<!-- End Navbar -->
	<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid tabel"></div>
	<!-- End Jumbotron -->
	<!-- Konten -->
	<div class="row tabel justify-content-center">
    <div class="col-6">
		<h3>Data jadwal</h3>
		
		<table cellpadding="5" cellspacing="0" border="1">
			<tr bgcolor="#CCCCCC">
				<th>No.</th>
				<th>ID</th>
				<th>Nama Acara</th>
				<th>Organisasi</th>
				<th>Jabatan</th>
				<th>Tempat</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Edit</th>
			</tr>
			
			<?php
			include('koneksi.php');
			$tb = "SELECT*FROM jadwal ORDER BY jadwal_id DESC";
			$query = mysqli_query($db, $tb) or die(mysqli_error());
			
			
			//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
			if(mysqli_num_rows($query) == 0){
				echo '<tr><td colspan="9">Tidak ada data!</td></tr>';
			}else{
			$no = 1;
			while($data = mysqli_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
					
					//menampilkan row dengan data di database
					echo '<tr>';
						echo '<td>'.$no.'</td>';	//menampilkan nomor urut
						echo '<td>'.$data['jadwal_id'].'</td>';	//menampilkan data id dari database
						echo '<td>'.$data['nama'].'</td>';	//menampilkan data nama lengkap dari database
						echo '<td>'.$data['organisasi'].'</td>';	//menampilkan data kelas dari database
						echo '<td>'.$data['jabatan'].'</td>';	//menampilkan data jurusan dari database
						echo '<td>'.$data['tempat'].'</td>';
						echo '<td>'.$data['tanggal'].'</td>';
						echo '<td>'.$data['jam'].'</td>';
						echo '<td><a href="edit.php?id='.$data['jadwal_id'].'">Edit</a> / <a href="hapus.php?id='.$data['jadwal_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=jadwal_id
					echo '</tr>';
					
					$no++;	//menambah jumlah nomor urut setiap row
					
				}
				
			}
			?>
    </table>
    </div>
	</div>
	<!-- End Konten -->

</body>
</html>