<?php
@session_start();
if(!isset($_SESSION['username'])){
    echo "<meta http-equiv='refresh' content='0,../?cmd=login'>";
    exit();
}

$target_file = array('','','','','');

for($i=0;$i<count($target_file);$i++){
    if(isset($_FILES['foto'.$i])){
        $target_file[$i] = upload($target_file, $i);
    }
}

function upload($target_file, $i){
    $file_name = basename( $_FILES["foto".$i]["name"]);
    $target_dir = "../img/galeri/";
    $uploadOk = 1;
    
    // Check if image file is a actual image or fake image
    if(!empty($_FILES['foto'.$i]['name'])) {

        $target_file[$i] = $target_dir . basename($_FILES["foto".$i]["name"]);
        $extention = array ('jpg','png','jpeg','bmp','gif');
        $imageFileType = pathinfo($target_file[$i],PATHINFO_EXTENSION);
        $getExtensi = strtolower(end(explode('.', $_FILES['foto'.$i]['name'])));
        
        $check = getimagesize($_FILES["foto".$i]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Gambar Tidak Valid !</div>";
            echo "<meta http-equiv='refresh' content='2,'/>";
            $uploadOk = 0;
            exit();
        }
        
        // Check file size
        if ($_FILES["foto".$i]["size"] > 16000000) {
            echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Ukuran Gambar Maksimal 15Mb !</div>";
            echo "<meta http-equiv='refresh' content='2,'/>";
            $uploadOk = 0;
            exit();
        }
        // Allow certain file formats
        if(!in_array($getExtensi, $extention)){
            echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Hanya Menerima Ekstensi JPG, JPEG, PNG dan GIF !</div>";
            echo "<meta http-equiv='refresh' content='2,'/>";
            $uploadOk = 0;
            exit();
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Unggah Gambar Gagal !</div>";
            echo "<meta http-equiv='refresh' content='2,'/>";
            exit();

        // if everything is ok, try to upload file
        } else {
            $target_file[$i] = md5(microtime()) . ".$getExtensi";
            if (move_uploaded_file($_FILES["foto".$i]["tmp_name"], $target_dir . $target_file[$i])) {
                //Input atau Edit
            } else {
                echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Terjadi Kesalahan Saat Unggah Gambar !</div>";
                echo "<meta http-equiv='refresh' content='2,'/>";
                exit();
            }
        }
    }else{
        /*if(isset($_POST['input'])){
            echo "<div class='alert alert-danger' style='margin-left:5px;margin-right:5px;margin-top:75px;margin-bottom:0px'>&nbsp <strong>Failed !</strong> Harap Pilih Gambar !</div>";
            echo "<meta http-equiv='refresh' content='2,'/>";
            exit();
        }*/
    }
    return $target_file[$i];
}


    if(isset($_POST['input'])){
        $field = array('foto');
        $data = array(array());
        $index = 0;
        for($a=0;$a<count($target_file);$a++){
            if($target_file[$a] != "" || $target_file[$a]!= NULL){
                $data[$index++][0] = $target_file[$a]; 
            }
        }

        if(PdoInput("galeri",$field,$data)){
            echo "<script>alert('Data Tersimpan !'); window.location = ''</script>";
        }else{
            echo "<script>alert('Gagal Tersimpan !'); window.location = ''</script>";
        }

    }elseif(isset($_POST['delete'])){
        $id = filter($_POST['delete']);
        if(PdoQuery("DELETE FROM galeri WHERE id_galeri='$id'")){
            echo "<script>window.location = ''</script>";
        }
    }elseif(isset($_POST['edit'])){
        $id = filter($_POST['edit']);
        $nama = filter($_POST['nama']);
        $jenis = filter($_POST['jenis']);
        $deskripsi = filter($_POST['deskripsi']);
        $harga = filter($_POST['harga']);

        $field = array('id_galeri','nama','jenis','keterangan','foto','harga');
        $data = array(array($id,$nama,$jenis,$deskripsi,$target_file,$harga));
        $gambar = "";
        if(isset($target_file) && $target_file!=""){
            $gambar = ", foto='$target_file'";
            $img = PdoSelect("SELECT foto FROM galeri WHERE id_galeri='$id'");
            unlink("../img/galeri/$img[foto]");
        }
        if(PdoQuery("UPDATE galeri SET nama='$nama', jenis='$jenis', keterangan='$deskripsi' $gambar, harga='$harga' WHERE id_galeri='$id'")){
            echo "<script>alert('Data Tersimpan !'); window.location = ''</script>";
        }else{
            echo "<script>alert('Gagal Tersimpan !'); window.location = ''</script>";
        }
    }

?>

<!-- Services Section -->
    <style type="text/css">
        .gal{
            width: 100%;
            height: 269px;
            object-fit: cover;
            background-position: center center;
            background-repeat: no-repeat;
            overflow: hidden;
        }
    </style>
    <div class="col-lg-12 text-center" style="margin-bottom: 30px;">
        <h3 class="section-heading">Daftar Galeri</h3>
    </div>
    <section id="galeri" style="padding-top:100px;">
        <div class="container"> 
            
            <button class="btn btn-primary" data-toggle="modal" href='#modal-input' style="margin-bottom: 15px;"><span class="fa fa-plus"></span> Tambah Galeri</button>
            <div class="modal fade" id="modal-input">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Tambah Galeri</h4>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Gambar 1</label>
                                    <input type="file" name="foto0" >
                                </div>

                                <div class="form-group">
                                    <label>Gambar 2</label>
                                    <input type="file" name="foto1" >
                                </div>

                                <div class="form-group">
                                    <label>Gambar 3</label>
                                    <input type="file" name="foto2" >
                                </div>

                                <div class="form-group">
                                    <label>Gambar 4</label>
                                    <input type="file" name="foto3" >
                                </div>

                                <div class="form-group">
                                    <label>Gambar 5</label>
                                    <input type="file" name="foto4">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary" name="input">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                $sql = "SELECT *FROM galeri order by id_galeri desc";
                $data = PdoQuery($sql);
            ?>
            <div class="row">
                <?php while($img = $data->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="col-md-4 col-sm-12 portfolio-item" style="margin-bottom: 5px;">
                    <a href="../img/galeri/<?php echo "$img[foto]"; ?>" class="portfolio-link" target="_blank">
                        <img src="../img/galeri/<?php echo "$img[foto]"; ?>" class="gal img-responsive img-rounded" alt="">
                    </a>
                        <div class="portfolio-caption" style="margin-top: -15px;">
                            <h3><button class="btn btn-danger" data-toggle="modal" href="#hapus_<?php echo $img['id_galeri']; ?>" style="width: 100%; margin-bottom: 10px;">
                                <i class="glyphicon glyphicon-trash"> Hapus</i>
                            </button></h3>
                        </div>
                </div>
                <div class="modal fade" id="hapus_<?php echo $img['id_galeri']; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><span class="glyphicon glyphicon-warning-sign"></span> Peringatan !</h4>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin <strong>menghapus</strong> ?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="" method="POST">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $img['id_galeri']; ?>">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php } ?>
            </div>
            </div>
        </div>
    </section>
<!-- Services Section -->

