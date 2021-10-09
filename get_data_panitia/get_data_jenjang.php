<?php
include "../database_connection/connection.php";
 
$pertemuan = $_GET['pertemuan'];
$jenjang  = mysqli_query($koneksi, "SELECT id_jenjang, nama_jenjang FROM jenjang_absen WHERE id_pertemuan='$pertemuan' order by nama_jenjang");
 
"<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($jenjang)){
echo "<option value=\"".$k['id_jenjang']."\">".$k['nama_jenjang']."</option>\n";
}
?>

