<?php 
//variabel bilangan 1 dan 2 diisi dengan nilai
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

//veriabel merge diisi oleh array merge untuk menggabungkan variabel bilangan 1 dan 2 
$merge = array_merge($bil1, $bil2);

//variabel unique diisi oleh array unique untuk mengidentifikasi apakah ada angka yang double (agar tidak duplikat) da memanggil variabel merge
$unique = array_unique($merge);

//arsort untuk mengurutkan bilangan terbesar-terkecil
arsort($unique);

echo "Hasil : ";

//mencetak function implode (untuk memisahkan karakter) diisi oleh , dan variabel unique
echo implode(', ', $unique);
?>