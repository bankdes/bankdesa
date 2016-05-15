<?php

  function tambahData($nama, $alamat, $umur){
    global $link;


    $query = "INSERT INTO user(nama, alamat, umur)
              VALUES ('$nama', '$alamat', '$umur')";
    if(mysqli_query($link, $query) or die('query tambah gagal')){
      return true;
    }else {
      return false;
    }
  }

  function tampil(){
    global $link;

    $query ="SELECT * FROM user";
    $result = mysqli_query($link, $query) or die('galat');

    return $result;
  }



    function hapusData($id){
      global $link;


      $query = "DELETE FROM user WHERE id = $id";
      if(mysqli_query($link, $query) or die('mbusek gagal lur')){
        return true;
      }else {
        return false;
      }
    }



 ?>
