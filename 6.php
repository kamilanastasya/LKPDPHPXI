<?php


$barang = [
    [
        "nama_barang" => "Pasta GIGI",
        "harga_barang" => 50000,
        "jumlah_beli" => 5
    ],
    [
        "nama_barang" => "Kaca",
        "harga_barang" => 12000,
        "jumlah_beli" => 2
    ],
    [
        "nama_barang" => "Laptop",
        "harga_barang" => 1000000,
        "jumlah_beli" => 2
    ]
    ];


// inisialisasi
$price = 0;

echo "Daftar belanjaan : </br>";
echo "<ol>";
    
// iterasi melalui setiap item dalam array $barang
foreach ($barang as $item) {
    // menghitung harga subtotal untuk item
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // menampilkan nama barang, jumlah yang dibeli, harga subtotal dalam bentuk format
    echo "<li> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subPrice, 0,'.','.');
        // menambahkan harga subtotal ke total harga
        $price += $subPrice;
    }
    
    echo "</ol>";
    echo "<br>";
    
    echo "Total harga yang harus dibayar adalah <b> Rp. " . number_format($price, 0,'.','.') . "</b>";
    ?>