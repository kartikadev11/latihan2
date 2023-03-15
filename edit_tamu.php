<?php
//$mysqli_connect untuk menyambungkan si php server dengan phpmyadmin database myadmin
//urutan mengisi -> nama server/hostname, nama username, password // username root, pass "" => kosong



//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","latihan2");

//ambil id yang diklik dari Edit
$id = $_GET['id'];

$edit="SELECT * FROM buku_tamu WHERE id_tamu='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);

echo "<form method=\"GET\" action=\"update_tamu.php\">
      <input type=\"hidden\" name=\"id\" value=\"$id\">
    Nama: <input type=\"text\" name=\"nama\" 
          value=\"$data[nama]\">
    Alamat: <input type=\"text\" name=\"alamat\" 
          value=\"$data[alamat]\">
    Telepon: <input type=\"text\" name=\"telepon\" 
    value=\"$data[no_hp]\">
    <input type=\"submit\" value=\"Edit\">
    </form>";
?>