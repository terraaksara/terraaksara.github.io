<?php
include "../database_connection/connection.php";
 
$pertemuan = $_GET['pertemuan'];
$absen  = mysqli_query($koneksi, "SELECT id_link_absen, nama_link_absen FROM link_mentor_absen WHERE id_pertemuan='$pertemuan' order by nama_link");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($absen)){
echo "<option value=\"".$k['id_link']."\">".$k['nama_link']."</option>\n";
}
?>

