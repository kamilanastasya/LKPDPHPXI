<?php

//jika kalimat memiliki simbol didalamnya maka akan menampilkan "karakter yang"
//jika tidak, maka menampilkan "Tidak terdapat simbol pada kalimat."
// $ = variabel
$teks = "Selamat ulangtahun yang ke-17";

//mencari semua simbol (karakter yang bukan huruf/ angka)
// preg_match_all = mencari semua simbol
// $matches = menampung semua simbol
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

// count = menghitung jumlah simbol
// $matches[0] = menampung semua simbol
// 0 depan matches yang berisi seluruh substring yang fungsinya buat nyari yang cocok sama pola pencarian 
// jika $matches[0] > 0, berarti ada simbol
// jika $matches[0] = 0, berarti tidak ada
if(count($matches[0]) > 0) {

    //array_unique = fungsinya adalah menghapus duplikat agar ga double outputnya
    $uniqueSymbol = array_unique($matches[0]);
    // implode = fungsinya adalah menggabungkan elemen dari array menjadi sebuah string
    echo "Karakter yang terdapat pada kalimat : " .implode(', ', $uniqueSymbol);
}else {
    echo "Tidak terdapat symbol pada kalimat.";
}
?>