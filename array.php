<?php 
$nama = array("Iwan", "Budi", "Siti", "Dewi");
$nama2 = array("Iwan" => 17, "Budi" => 20, "Siti" => 19, "Dewi" => 22);

$data = [
    ["nama" => "Iwan", "umur" => 17],
    ["nama" => "Budi", "umur" => 20],
    ["nama" => "Siti", "umur" => 19],
    ["nama" => "Dewi", "umur" => 22]
];


echo "Nama pertama: " . $nama[0] . "<br>";
echo $nama2["Budi"] . "<br>";

echo $data[2]["nama"] . " berumur " . $data[2]["umur"] . " tahun.<br>";


function cetak($arr){
    for ($x = 0; $x < count($arr); $x++) {
        echo $arr[$x] . "<br>";
    }
}

$nama = array("Iwan", "Budi", "Siti", "Dewi");
cetak($nama);

//update
$nama[2] = "Siti Nurhala";
echo $nama[2] . "<br>";
//tambah
array_push($nama, "Andi");
echo $nama[4] . "<br>";

//hapus
array_splice($nama, 1, 1);
echo $nama[1] . "<br>";


?>