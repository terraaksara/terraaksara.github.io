<?php
include "../database_connection/connection.php";
 
$pertemuan = $_GET['pertemuan'];
$link  = mysqli_query($koneksi, "SELECT id_link, nama_link FROM link_absen WHERE id_pertemuan ='$pertemuan' order by nama_link");
 
"<option>-- Lihat Link --</option>";
while($k = mysqli_fetch_array($link)){
echo "<option value=\"".$k['id_link']."\">".$k['nama_link']."</option>\n";
}
?>