<?php
include "../database_connection/connection.php";
 
$mentor = $_GET['mentor'];
$kelas  = mysqli_query($koneksi, "SELECT id_kelas, nama_kelas FROM kelas WHERE id_mentor='$mentor' order by nama_kelas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($kelas)){
echo "<option value=\"".$k['id_kelas']."\">".$k['nama_kelas']."</option>\n";
}
?>