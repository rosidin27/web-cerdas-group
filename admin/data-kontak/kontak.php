<?php
@session_start();
if(!isset($_SESSION['username'])){
    echo "<meta http-equiv='refresh' content='0,../?cmd=login'>";
    exit();
}

if(isset($_GET['data'])){
	if($_GET['data']=="kontak"){
		$sql = "SELECT *FROM kontak ORDER BY id_kontak DESC";
		$data = PdoSelect($sql);
	}else{
		redirect(0,"../");
	}
}else{
	redirect(0,"../");
}

if(isset($_POST['data'])){
	$kontak = $_POST['kontak'];
	$id = $data['id_kontak'];

	$data_field = array(
		'kontak'=>$kontak
	);

	if($_GET['data'] == "kontak"){
		edit($kontak,$id);
	}else{
		redirect(0,"../");
	}
}

function edit($data_field, $id){

	$field = array('kontak');
	$data = array(array($data_field));

	if(PdoInput("kontak",$field,$data)){
        echo "<script>alert('Data Tersimpan !'); window.location = ''</script>";
    }else{
        echo "<script>alert('Gagal Tersimpan !'); window.location = ''</script>";
    }
	
}

function redirect($delay,$link){
	echo "<meta http-equiv='refresh' content = '".$delay.",".$link."'>";
}
?>
 

<html>
	<head>
		<title>Menu Admin</title>
	</head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<center><h3>Edit Data Kontak</h3></center><br>

			<div class="form-group">
				<label><h4>Kontak</h4></label> 
				<textarea name="kontak" style="width:100%; height:320px;"><?php if(isset($data)) echo $data['kontak']; ?></textarea>
				<p style="color:red;">Ketik "<strong><i>&lt;br&gt;</i></strong>" (tanpa tanda kutip) disetiap akhir kalimat atau kata untuk membuat baris baru.</p>
			</div>
			<button type="submit" name="data" class="btn btn-primary" style="width:49%; margin-bottom: 50px; float: left">Simpan</button>
		</form>
			<a href="../"><button class="btn btn-danger" style="width:49%; margin-bottom: 50px;float: right">Batal</button></a>
	</body>
</html>