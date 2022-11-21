<?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");

if (isset($_POST['update'])) {

	// AMBIL ID DATA
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	// AMBIL NAMA FILE FOTO SEBELUMNYA
	$data = mysqli_query($mysqli, "SELECT gambar FROM users WHERE id='$id'");
	$dataImage = mysqli_fetch_assoc($data);
	$oldImage = $dataImage['gambar'];

	// AMBIL DATA DATA DIDALAM INPUT
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$service = mysqli_real_escape_string($mysqli, $_POST['service']);
	$site = mysqli_real_escape_string($mysqli, $_POST['site']);
	$pays = mysqli_real_escape_string($mysqli, $_POST['pays']);
	$lieu = mysqli_real_escape_string($mysqli, $_POST['lieu']);
	$details = mysqli_real_escape_string($mysqli, $_POST['details']);
	$filename = $_FILES['newImage']['name'];

	// CEK DATA TIDAK BOLEH KOSONG
	if (empty($nama) || empty($umur) || empty($email) || empty($service) || empty($site) || empty($pays) || empty($lieu) || empty($details)) {

		if (empty($nama)) {
			echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
		}

		if (empty($umur)) {
			echo "<font color='red'>Kolom Umur tidak boleh kosong.</font><br/>";
		}

		if (empty($email)) {
			echo "<font color='red'>Kolom Email tidak boleh kosong.</font><br/>";
		}
		if (empty($service)) {
			echo "<font color='red'>Kolom service tidak boleh kosong.</font><br/>";
		}
		if (empty($site)) {
			echo "<font color='red'>Kolom site tidak boleh kosong.</font><br/>";
		}
		if (empty($pays)) {
			echo "<font color='red'>Kolom pays tidak boleh kosong.</font><br/>";
		}
		if (empty($lieu)) {
			echo "<font color='red'>Kolom lieu tidak boleh kosong.</font><br/>";
		}
		if (empty($details)) {
			echo "<font color='red'>Kolom details tidak boleh kosong.</font><br/>";
		}
	} else {

		// JIKA FOTO DI GANTI
		if (!empty($filename)) {
			$filetmpname = $_FILES['newImage']['tmp_name'];
			$folder = "image/";

			// GAMBAR LAMA DI DELETE
			unlink($folder . $oldImage) or die("GAGAL");

			// GAMBAR BARU DI MASUKAN KE FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
			$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',umur='$umur',email='$email',service='$service',site='$site',pays='$pays',lieu='$lieu',details='$details',gambar='$filename' WHERE id=$id");
		}

		// MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
		$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',umur='$umur',email='$email',service='$service',pays='$pays',lieu='$lieu',details='$details' WHERE id=$id");

		// REDIRECT KE HALAMAN INDEX.PHP
		header("Location: Service.php");
	}
}
?>
<?php
// AMBIL ID DARI URL
$id = $_GET['id'];

// AMBIL DATA BERDASARKAN ID
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$name = $res['nama'];
	$age = $res['umur'];
	$email = $res['email'];
	$service = $res['service'];
	$image = $res['gambar'];
	$lieu = $res['lieu'];
	$site = $res['site'];
	$pays = $res['pays'];
	$details = $res['details'];
}
?>
<html>

<head>
<link rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Edit Data</title>
</head>

<body>
<div class="titre-ajoute"><h3>Editer un Service</h3></div>

               
		<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
			
				
				
		<div class="mt-3 mb-3 m-3">
		<div class="name">
					<input type="text" class="form-control" name="nama" value="<?php echo $name; ?>"></td>
		
				
					
					<input type="text" class="form-control" name="umur" value="<?php echo $age; ?>">
				
				</div>
				</div>

				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="lieu" value="<?php echo $lieu; ?>"></td>
				</div>
				
				

				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="pays" value="<?php echo $pays; ?>"></td>
				</div>
				

				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="site" value="<?php echo $site; ?>"></td>
				</div>
				

				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="email" value="<?php echo $email; ?>"></td>
				</div>
				
				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="service" value="<?php echo $service; ?>"></td>
				</div>
				
				
				
				<div class="mt-3 mb-3 m-3">
					<input type="text" class="form-control" name="details" value="<?php echo $details; ?>"></td>
				</div>
				
				
				<div class="mt-3 mb-3 m-3">
					<img width="80" src="image/<?php echo $image ?>">
				</div>
				<div class="mt-3 mb-3 m-3">
					<input type="file" class="form-control" name="newImage">
				</div>
				
				<div class="mt-3 mb-3 m-3">
					<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>

					<input type="submit" class="btn btn-primary" name="update" value="Update">
				</div>
			
		</form>

		<button type="submit" class="btn btn-primary cv"><a class="ac" href="Service.php">Annuler</button>
</body>

</html>
