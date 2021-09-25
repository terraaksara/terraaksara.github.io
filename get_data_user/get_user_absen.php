<?php
include "../database_connection/connection.php";
 
$kelas = $_GET['kelas'];
$absen  = mysqli_query($koneksi, "SELECT id_link_absen, nama_link_absen FROM link_mentor_absen WHERE id_uskelas='$uskabkot' order by nama_link_kelas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($absen)){
echo "<option value=\"".$k['id_link_absen']."\">".$k['nama_link_absen']."</option>\n";
}
?>

