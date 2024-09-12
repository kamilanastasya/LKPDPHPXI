<?php
function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ['A', 'D', 'C', 'C'. 'B', 'A', 'E', 'B', 'A', 'E'];
    $arrBenar = []; 
    


    foreach ($jawaban as $key => $value ) {
        if($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1;
        }else {
            $arrBenar[$key] = 0;
        }
    } 

    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b><br>";
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b><br>";
}

checkJawaban('Kamila.', 'A', 'D', 'C', 'C'. 'B', 'A', 'E', 'B', 'A', 'B');
?>