<?php
require_once('core/init.php');
require_once('template/header.php');

  if(isset($_POST['submit'])){

    if(tambahData($_POST['nama'], $_POST['alamat'], $_POST['umur'])){
      header('Location: index.php');
    }else {
      echo 'gagal menambahkan data';
    }
  }
?>

<h3> Tambah Data </h3>
<form role="form" action="" method="post">
 <div class="form-group">
   <label for="nama">Nama:</label>
   <input type="text" name="nama" class="form-control" id="email">
 </div>
 <div class="form-group">
   <label for="alamat">Alamat:</label>
   <input type="text" name="alamat" class="form-control" id="email">
 </div>
 <div class="form-group">
   <label for="umur">Umur:</label>
   <input type="text" name="umur" class="form-control" id="email">
 </div>
 <input type="submit" name="submit" value="tambah data">
</form>
<?php
require_once('template/footer.php');
 ?>
