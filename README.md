<html>
	<head>
		<title>Halaman Pendaftaran</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
	</head>
	<body>
		<div class="box-form">
			<?php
				include "koneksi.php";
				if(isset($_POST['daftar'])){
					$daftar = mysqli_query($conn, "INSERT INTO tb_daftar VALUES
					('".$_POST['id']."',
					'".$_POST['nama']."',
					'".$_POST['jk']."',
					'".$_POST['telp']."',
					'".$_POST['alamat']."',
					'".$_POST['tgl_lhr']."',
					NULL)");
					if($daftar){
						echo 'Berhasil daftar';
					}else{
						echo 'Gagal daftar';
					}
				}
			?>
			<h2>Berlangganan FDC IPTV</h2>
			<form action="" method="post">
				<?php
					$data = mysqli_query($conn, "SELECT MAX(id_pendaftaran) AS idp FROM
					tb_daftar");
					$data_akhir = mysqli_fetch_array($data);
					$id1 = $data_akhir['idp'];
					$id2 = substr($id1,3,2); //USR01
					$id3 = $id2 + 1;
					$id4 = 'USR'.sprintf('%02s',$id3);
				?>
				<input type="hidden" name="id" value="<?php echo $id4 ?>" /><br>
				Nama Lengkap<br>
				<input type="text" name="nama" value="" /><br>
				Telepon / Hp<br>
				<input type="text" name="telp" required /><br>
				Email<br>
				<input type="text" name="email" required /><br>
				Alamat<br>
				<textarea name="alamat" rows="4" cols="50" required></textarea><br>
				Tanggal Lahir<br>
				Pilih Paket<br>
				<input type="date" name="tgl_lhr" required /><br>
				<input type="radio" name="jk" value="1 bln" title="1 Bulan" />1 &nbsp;&nbsp;&nbsp;
				<input type="radio" name="jk" value="2 bln" title="1 Bulan" />2 &nbsp;&nbsp;&nbsp;
				<input type="radio" name="jk" value="3 bln" title="2 Bulan"/>3<br>
				
				<input type="submit" name="daftar" value="Daftar" /><br>
			</form>
		</div>
	</body>
</html>
