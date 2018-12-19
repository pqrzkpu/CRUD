<?php
/*ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017*/
require 'config.php';

$id = $_GET['id']; 

if(!empty($id)){
    $sql = "DELETE FROM t_mahasiswa WHERE mhs_id = ".$id."";
    $result = $conn->query($sql);
}

header("Location: ../index.php");
$conn->close();
?>