<?php
include "../database_connection/connection.php";
 
$abkabkot = $_GET['abkabkot'];
$abkelas  = mysqli_query($koneksi, "SELECT id_abkelas, nama_abkelas FROM absen_kelas WHERE id_abkabkot='$abkabkot' order by nama_abkelas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($abkelas)){
echo "<option value=\"".$k['id_abkelas']."\">".$k['nama_abkelas']."</option>\n";
}
?>