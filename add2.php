<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['pp'])) {
 ?>

<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	// INCLUDE KONEKSI KE DATABASE
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
		$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		$lieu = mysqli_real_escape_string($mysqli, $_POST['lieu']);
		$pays = mysqli_real_escape_string($mysqli, $_POST['pays']);
		$site = mysqli_real_escape_string($mysqli, $_POST['site']);
		$service = mysqli_real_escape_string($mysqli, $_POST['service']);
		$domaine = mysqli_real_escape_string($mysqli, $_POST['domaine']);
		$details = mysqli_real_escape_string($mysqli, $_POST['details']);
		$id_user = mysqli_real_escape_string($mysqli, $_SESSION['id']);
		$filename = $_FILES['gambar']['name'];

		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($nama) || empty($umur) || empty($email) || empty($lieu) || empty($pays) || empty($site) || empty($service) || empty($domaine) || empty($details) || empty($filename)) {

			if (empty($nama)) {
				echo "<font color='red'>veuillez entrer votre nom.</font><br/>";
			}

			if (empty($umur)) {
				echo "<font color='red'>veuillez entrer votre numero de telephone.</font><br/>";
			}

			if (empty($email)) {
				echo "<font color='red'>veuillez entrer votre email.</font><br/>";
			}
			if (empty($lieu)) {
				echo "<font color='red'>veuillez entrer le lieu de l'entreprise.</font><br/>";
			}
			if (empty($pays)) {
				echo "<font color='red'>veuillez entrer votre pays</font><br/>";
			}
			if (empty($site)) {
				echo "<font color='red'>veuillez entrer votre site web</font><br/>";
			}
			if (empty($service)) {
				echo "<font color='red'>veuillez entrer un le nom du service.</font><br/>";
			}
			if (empty($domaine)) {
				echo "<font color='red'>veuillez entrer un domaine du service.</font><br/>";
			}
			if (empty($details)) {
				echo "<font color='red'>veuillez entrer les details du service.</font><br/>";
			}

			// KEMBALI KE HALAMAN SEBELUMNYA
			
		} else {
			// JIKA SEMUANYA TIDAK KOSONG
			$filetmpname = $_FILES['gambar']['tmp_name'];

			// FOLDER DIMANA GAMBAR AKAN DI SIMPAN
			$folder = 'image/';
			// GAMBAR DI SIMPAN KE DALAM FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
			$result = mysqli_query($mysqli, "INSERT INTO annonce(nama,umur,email,lieu,pays,site,service, domaine,details,id_user,gambar) VALUES('$nama', '$umur', '$email', '$lieu', '$pays', '$site', '$service','$domaine', '$details','$id_user', '$filename')");

			header("Location: Service.php");
		}
	}
	?>
</body>

</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>