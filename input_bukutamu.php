<?php
//$mysqli_connect untuk menyambungkan si php server dengan phpmyadmin database myadmin
//urutan mengisi -> nama server/hostname, nama username, password // username root, pass "" => kosong



//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","latihan2");

//ambil variabel yang dikirim ke database
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$telepon = $_GET['telepon'];


///KALO GET ADA VALUENYA KALO POST GAADA VALUENYA
$input="INSERT INTO buku_tamu(nama,alamat,no_hp)
        VALUES('$nama', '$alamat', '$telepon')";
        // eksekusi tabel koneksi dgn insert
$hasil = mysqli_query($koneksi,$input);

// cek query apakah data yang diinputkan sudah benar
if($hasil){
    header("location:beranda_bukutamu.php");
}else{
    echo"Input data tamu gagal";
}
?>