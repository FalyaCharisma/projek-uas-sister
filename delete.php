<?php

  include "koneksi.php";

  $id = $_GET['id'];
  $query = "DELETE FROM tb_siswa WHERE id = $id";
  $result = mysqli_query($db, $query);
  if($result){
    header("location: index.php");
  }

?>