<html>
    <h3>Data Tamu</h3>
    <p><a href = {form_bukutamu.php</p>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "LATIHAN2");
    //query untuk menselect atau menampilkan data
    //order by(urutannya berdasarkan apa)
    $tampil = "SELECT * FROM buku_tamu ORDER BY id_tamu";
    $hasil = mysqli_query($koneksi, $tampil);
    $total = mysqli_num_rows($hasil);

    echo "<table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>";

    //menampilkan data nama, alamat, telepon ke browser
    while($data = mysqli_fetch_array($hasil)){
        echo "<tr>
        <td> $data[nama]</td>
        <td> $data[alamat] </td>
        <td> $data[no_hp] </td>
        <td><a href=\"edit_tamu.php?id=$data[id_tamu]\">Edit</a> | 
        <a href=\"hapus_tamu.php?id=$data[id_tamu]\">Hapus</a>
            </td>
        </tr>";
    }
    echo "</table>";
    echo "<p>Jumlah Tamu <b>$total<b> Orang</p>";

    
    ?>
</html>