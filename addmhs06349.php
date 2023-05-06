<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa :: Tambah Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
	<?php
	require "head.html";
	require "fungsi06349.php";
	$sql="select nim from mhs order by nim desc limit 1";
	$qry=mysqli_query($koneksi,$sql);
	$datax=mysqli_fetch_assoc($qry);
	//kode otomatis
	if ($datax) {
    	$no_terakhir = substr($datax['nim'], -3);
    	$no = $no_terakhir + 1;

    	if ($no > 0 and $no < 10) {
        	$nim = "00" . $no;
    	} else if ($no > 10 and $no < 100) {
        	$nim = "0" . $no;
    	} else if ($no > 100) {
        	$nim = $no;
    	}
	} else {
    $nim = "001";
	}
	$vnim = "mhs" . '-' . $nim;
	//mhs-001
	?>

	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH DATA MAHASISWA</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addmhs06349.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">NIM :</label>
				<input class="form-control" type="text" value="<?= $vnim ?>" name="nim" id="nim" required>
			</div>
			<div class="form-group">
				<label for="nama">NAMA MAHASISWA :</label>
				<input class="form-control" type="nama" name="nama" id="nama">
			</div>
            <div class="form-group">
				<label for="email">EMAIL :</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="foto">FOTO MAHASISWA : </label> 
				<input class="form-control" type="file" name="foto" id="foto">
			</div>
			<div>		
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>

	
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var nim	= $('#nim').val();
				var nama 	= $('#nama').val();
                var email 	= $('#email').val();
				var foto = $('#foto').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addmhs06349.php",
					data	: {
								nim:nim,
								nama:nama,
                                email:email,
								foto:foto
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	
</body>
</html>