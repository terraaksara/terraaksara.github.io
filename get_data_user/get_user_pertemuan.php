<?php
include "../database_connection/connection.php";
 
$uskelas = $_GET['uskelas'];
$pertemuan  = mysqli_query($koneksi, "SELECT id_pertemuan, nama_pertemuan FROM link_pertemuan_mentor WHERE id_uskelas='$uskelas' order by nama_pertemuan");
 
echo "<option>-- Pilih Pertemuan --</option>";
while($k = mysqli_fetch_array($pertemuan)){
echo "<option value=\"".$k['id_pertemuan']."\">".$k['nama_pertemuan']."</option>\n";
}
?>

