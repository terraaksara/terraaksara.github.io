<?php
include "../database_connection/connection.php";
 
$kelas = $_GET['kelas'];
$link  = mysqli_query($koneksi, "SELECT id_link, nama_link FROM link WHERE id_kelas ='$kelas' order by nama_link");
 
"<option>-- Lihat Link --</option>";
while($k = mysqli_fetch_array($link)){
echo "<option value=\"".$k['id_link']."\">".$k['nama_link']."</option>\n";
}
?>