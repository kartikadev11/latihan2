<html>
    <h3>Data Tamu</h3>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "latihan2");
    //query untuk menselect atau menampilkan data
    //order by(urutannya berdasarkan apa)
    $tampil = "SELECT * FROM buku_tamu ORDER BY id_tamu";
    $hasil = mysqli_query($koneksi, $tampil);

    echo "<table>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
    </tr>";

    //menampilkan data nama, alamat, telepon ke browser
    while($data = mysqli_fetch_array($hasil)){
        echo "<tr>
        <td> $data[nama]</td>
        <td> $data[alamat] </td>
        <td> $data[no_hp] </td>
        </tr>";
    }
    echo "</table>";

    
    ?>
</html>