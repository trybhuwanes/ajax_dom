<?php
  $name = $_POST['teks'];
  $angka = $_POST['angka'];
  
  $arrayNama =[];
  for ($i = 0; $i < $angka; $i++) {
    array_push($arrayNama, "$i. $name");
  }
  echo json_encode($arrayNama);
  header("Content-type:application/json");
?>