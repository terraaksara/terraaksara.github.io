<?php
include "../database_connection/connection.php";
 
$jenjang = $_GET['jenjang'];
$link  = mysqli_query($koneksi, "SELECT id_link, nama_link FROM jenjang_absen WHERE id_jenjang='$jenjang' order by nama_link");
 
"<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($link)){
echo "<option value=\"".$k['id_link']."\">".$k['nama_link']."</option>\n";
}
?>

