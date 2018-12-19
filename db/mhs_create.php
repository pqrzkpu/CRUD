<?php
/*ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017*/
require 'config.php';

$name       = $_POST['mhs_name'];
$class      = $_POST['mhs_class'];
$address    = $_POST['mhs_address'];
$major      = $_POST['mhs_major'];
$bplace     = $_POST['mhs_birth_place'];
$bdate      = $_POST['mhs_birth_date'];


$sql = "INSERT INTO t_mahasiswa (mhs_name, mhs_class, mhs_address, mhs_major, mhs_birth_place, mhs_birth_date) 
            VALUES ('".$name."','".$class."','".$address."','".$major."','".$bplace."','".$bdate."')";

$result = $conn->query($sql);

if ($result) {
    header('Location: ../index.php');
} else {
    die("Database query failed. " . mysqli_error($conn)); 
}
$conn->close();
?>