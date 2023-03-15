<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","",
           "latihan2");

//ambil variabel yang dikirim dari form
$id=$_GET['id'];

$hapus = "DELETE FROM buku_tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($koneksi,$hapus);

//cek query apakah data yang dihapus sudah benar
if ($hasil) {
    //arahkan ke beranda
    header("location:beranda_bukutamu.php");
}else {
    echo "Hapus data tamu gagal";
}
?>