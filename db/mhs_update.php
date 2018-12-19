<?php 
/*ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017*/ 
require 'config.php';

$id     = $_POST['mhs_id'];
$name       = $_POST['mhs_name'];
$class      = $_POST['mhs_class'];
$address    = $_POST['mhs_address'];
$major      = $_POST['mhs_major'];
$bplace     = $_POST['mhs_birth_place'];
$bdate      = $_POST['mhs_birth_date'];

$sql = "UPDATE t_mahasiswa SET mhs_name         = '".$name."', 
                               mhs_class        = '".$class."', 
                               mhs_address      = '".$address."', 
                               mhs_major        = '".$major."',  
                               mhs_birth_place  = '".$bplace."', 
                               mhs_birth_date   = '".$bdate."'
        WHERE mhs_id = '".$id."'";

$result = $conn->query($sql);
 
header("location:../index.php");
?>