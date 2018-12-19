<?php
/*ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017*/
require 'config.php';

$id = $_GET['id']; 

$sql = "SELECT * FROM t_mahasiswa WHERE mhs_id = ".$id."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_array()) {
 
         echo ' <div class="table-responsive">';
         echo '     <table class="table table-striped">';
         echo '         <tr>';
         echo '             <td>Nama</td>';
         echo '             <td>:</td>';
         echo '             <td>'.$row['mhs_name'].'</td>';
         echo '         </tr>';
         echo '         <tr>';
         echo '             <td>Kelas</td>';
         echo '             <td>:</td>';
         echo '             <td>'.$row['mhs_class'].'</td>';
         echo '         </tr>';
         echo '         <tr>';
         echo '             <td>Alamat</td>';
         echo '             <td>:</td>';
         echo '             <td>'.$row['mhs_address'].'</td>';
         echo '         </tr>';
         echo '         <tr>';
         echo '             <td>Jurusan</td>';
         echo '             <td>:</td>';
         echo '             <td>'.$row['mhs_major'].'</td>';
         echo '         </tr>';
         echo '         <tr>';
         echo '             <td>Tempat / Tanggal Lahir</td>';
         echo '             <td>:</td>';
         echo '             <td>'.$row['mhs_birth_place']. ', ' .$row['mhs_birth_date']. '</td>';
         echo '         </tr>';
         echo '     </table>';
         echo '  </div>';
         echo '</div>';
         
         
     }
                        
} else {
    die("Database query failed. " . mysqli_error($conn)); 
}
$conn->close();
?>