<?php
require_once 'Abstract.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(5, 10);
$segitiga = new Segitiga(6, 8);

$bidangArray = [$lingkaran, $persegiPanjang, $segitiga];

echo "<table border='1' align='center' width='50%' height='50%'>";
echo "<thead>
        <h2 align='center'>Tabel Bidang Geometri</h2>
        <tr>
            <th>No</th>
            <th>Nama Bidang</th>
            <th>Keterangan</th>
            <th>Luas Bidang</th>
            <th>Keliling Bidang</th>
        </tr>
    </thead>";
echo "<tbody>";

foreach ($bidangArray as $index => $bidang) {
    echo "<tr>";
    echo "<td>" . ($index + 1) . "</td>";
    echo "<td>" . $bidang->namaBidang() . "</td>";
    
    echo "<td>" . $bidang->keteranganBidang() . "</td>";
    echo "<td>" . $bidang->luasBidang() . "</td>";
    echo "<td>" . $bidang->kelilingBidang() . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";
?>
