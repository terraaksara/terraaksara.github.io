<?php
include "../database_connection/connection.php";
 
$abkelas = $_GET['abkelas'];
$pertemuan  = mysqli_query($koneksi, "SELECT id_pertemuan, nama_pertemuan FROM pertemuan WHERE id_abkelas='$abkelas' order by nama_pertemuan");
 
echo "<option>-- Pilih Pertemuan --</option>";
while($k = mysqli_fetch_array($pertemuan)){
echo "<option value=\"".$k['id_pertemuan']."\">".$k['nama_pertemuan']."</option>\n";
}
?>