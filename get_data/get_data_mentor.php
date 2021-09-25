<?php
include "../database_connection/connection.php";
 
$kabkot = $_GET['kabkot'];
$mentor  = mysqli_query($koneksi, "SELECT id_mentor, nama_mentor FROM mentor WHERE id_kabkot='$kabkot' order by nama_mentor");
 
echo "<option>-- Pilih Mentor --</option>";
while($k = mysqli_fetch_array($mentor)){
echo "<option value=\"".$k['id_mentor']."\">".$k['nama_mentor']."</option>\n";
}
?>