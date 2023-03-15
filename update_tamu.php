<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","",
           "latihan2");

//ambil variabel yang dikirim dari form
$id=$_GET['id'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$telepon=$_GET['telepon'];

$update = "UPDATE buku_tamu SET nama='$nama',
           alamat='$alamat', no_hp='$telepon'
           WHERE id_tamu='$id'";
$hasil = mysqli_query($koneksi,$update);

//cek query apakah data yang diinputkan sudah benar
if ($hasil) {
    //arahkan ke beranda
    header("location:beranda_bukutamu.php");
}else {
    echo "Update data tamu gagal";
}
?>