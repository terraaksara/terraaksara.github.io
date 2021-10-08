<?php
include "../database_connection/connection.php";
 
$kelas = $_GET['kelas'];
$pertemuan  = mysqli_query($koneksi, "SELECT id_pertemuan, nama_pertemuan FROM link_pertemuan_mentor WHERE id_uskelas='$uskabkot' order by nama_link_kelas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($pertemuan)){
echo "<option value=\"".$k['id_pertemuan']."\">".$k['nama_pertemuan']."</option>\n";
}
?>

