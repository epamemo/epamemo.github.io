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
			<h3>Tambah Data Siswa</h3>
			
			<form action="tambah-proses.php" method="post">
				<table cellpadding="3" cellspacing="0">
					<!-- <tr> 
						<td>Id</td>
						<td>:</td>
						<td><input type="number" name="id" required></td>
					</tr> -->
					<tr>
						<td>Nama Acara</td>
						<td>:</td>
						<td><input type="text" name="nama" size="30" required></td>
					</tr>
					<tr>
						<td>Organisasi</td>
						<td>:</td>
						<td>
							<select name="organisasi" required>
								<option value="">Pilih Organisasi</option>
								<option value="Hima Ilkom">Hima Ilkom</option>
								<option value="ScreenShot">ScreenShot</option>
								<option value="I-Secret">I-Secret</option>
								<option value="Robotik">Robotik</option>
								<option value="Eksternal">Eksternal</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>:</td>
						<td>
							<select name="jabatan" required>
								<option value="">Pilih Jabatan</option>
								<option value="Panitia">Panitia</option>
								<option value="Peserta">Peserta</option>
								<option value="Tamu Undangan">Tamu Undangan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tempat</td>
						<td>:</td>
						<td><input type="text" name="tempat" size="30" required></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><input type="date" name="tanggal" required></td>
					</tr>
					<tr>
						<td>Jam</td>
						<td>:</td>
						<td><input type="time" name="jam" size="30" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td><input type="submit" name="tambah" value="Tambah"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>