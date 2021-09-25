<?php
include "../database_connection/connection.php";
 
$kelas = $_GET['kelas'];
$tugas  = mysqli_query($koneksi, "SELECT id_tugas, link_tugas FROM link_mentor_tugas WHERE id_uskelas='$uskabkot' order by link_tugas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($tugas)){
echo "<option value=\"".$k['id_tugas']."\">".$k['link_tugas']."</option>\n";
}
?>

