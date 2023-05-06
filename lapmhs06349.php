<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
	<!-- Use fontawesome 5-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script>
		function cetak(hal) {
		  var xhttp;
		  var dtcetak;	
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  dtcetak= this.responseText;
			}
		  };
		  xhttp.open("GET", "ajaxupdatemhs06349.php?hal="+hal, true);
		  xhttp.send();
		}
	</script>		
</head>
<body>
<?php
require "fungsi06349.php";
require "head.html";

$sql="select * from mhs";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;

//Ambil data untuk ditampilkan
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa :: Daftar Mahasiswa</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/stylepdf.css">
</head>
<body>
<div class="utama">
<h1 class="text-center">Laporan Data Mahasiswa<br>
<sub>Jihan Defina Rani - A12.2020.06349<sub><br>
<table>	
<tr>
	<th>NO</th>
	<th>NIM</th>
    <th>NAMA Mahasiswa</th>
	<th>EMAIL</th>
	<th>Foto Mahasiswa</th>
</tr>
<tbody>
<?php
while($row=mysqli_fetch_assoc($hasil)){
	?>	
	<tr>
		<td><?php echo $no?></td>
		<td><?php echo $row["nim"]?></td>
        <td><?php echo $row["nama"]?></td>
		<td><?php echo $row["email"]?></td>
		<td><img src="<?php echo "foto/".$row["foto"]?>" height="50"></td>
		<td>
	</tr>
	<?php
	$no++;
	}
?>