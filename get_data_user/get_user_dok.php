<?php
include "../database_connection/connection.php";
 
$kelas = $_GET['kelas'];
$doc  = mysqli_query($koneksi, "SELECT id_doc, link_doc FROM link_mentor_doc WHERE id_uskelas='$uskabkot' order by link_doc");
 
echo "<option>-- Pilih kelas --</option>";
while($k = mysqli_fetch_array($doc)){
echo "<option value=\"".$k['id_doc']."\">".$k['link_doc']."</option>\n";
}
?>


