<table border="1px" id="tabel">
<thead>
    <tr>
        <th>Nama UMKM</th>
        <th>Bidang</th>
        <th>Alamat</th>
    </tr>
</thead>
<tbody>
<?php
include ("config.php");
$sql = "SELECT * FROM user INNER JOIN bidang ON user.bidang=bidang.id_bidang AND role=1";
$query = mysqli_query($db, $sql);

while($umkm = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td>".$umkm['nama_umkm']."</td>";
    echo "<td>".$umkm['nm_bidang']."</td>";
    echo "<td>".$umkm['alamat']."</td>";

    echo "</tr>";
}
?>
</tbody>
</table>