<?php
include "../database_connection/connection.php";
 
$uskabkot = $_GET['uskabkot'];
$uskelas  = mysqli_query($koneksi, "SELECT id_uskelas, nama_uskelas FROM link_mentor_kelas WHERE id_uskabkot='$uskabkot' order by nama_uskelas");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($uskelas)){
echo "<option value=\"".$k['id_uskelas']."\">".$k['nama_uskelas']."</option>\n";
}
?>
