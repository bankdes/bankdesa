<?php
require_once('core/init.php');
require_once('template/header.php');

$result = tampil();
?>

<a href="add.php" class="btn btn-info" role="button">Tambah Data</a>


<div class="container">
  <table class="table table-striped">
    <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Umur</th>
        </tr>
      </thead>

    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <th><?php echo $row['nama']; ?></th>
        <th><?php echo $row['alamat']; ?></th>
        <th><?php echo $row['umur']; ?></th>
        <th><a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a><th>
      </tr>
    <?php } //endwhle ?>
    </tbody>
  </table>
</div>
<?php
require_once('template/footer.php');
 ?>
