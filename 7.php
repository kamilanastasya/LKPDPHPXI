<?php

function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = [];
    $arrBenar = [];// untuk menyimpan hasil penilaian jawaban

    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1;
        } else {
            $arrBenar[$key] = 0;
        }
    }

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";
}

checkJawaban("Putri", "A");
?>