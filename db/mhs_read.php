<?php
/*ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017*/
require 'config.php';

$sql = "SELECT * FROM t_mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["mhs_id"]. " - Name: " . $row["mhs_name"]. " " . $row["mhs_class"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>