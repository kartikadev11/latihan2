<html>
    <h3>Data Tamu</h3>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "latihan2");
    //query untuk menselect atau menampilkan data
    //order by(urutannya berdasarkan apa)
    $tampil = "SELECT * FROM buku_tamu ORDER BY id_tamu";
    $hasil = mysqli_query($koneksi, $tampil);


    //menampilkan data nama, alamat, telepon ke browser
    while($data = mysqli_fetch_array($hasil)){
        echo "Nama: $data[nama] <br>";
        echo "Alamat: $data[alamat] <br>";
        echo "telepon: $data[no_hp] <br><hr>";
        
    }
    ?>
</html>