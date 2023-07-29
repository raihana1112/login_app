<?php

// echo "Menentukan Jenis Tanaman Menggunakan Metode SAW menggunakan PHP\n";
$alternatif = ["Bawang", "Cabai", "Padi"];
$kriteria = ["Kelembapan Udara", "Curah Hujan", "Penyinaran Matahari", "Suhu"];
$costbenefit = ["benefit", "benefit", "benefit", "benefit"];
$bobot = [0.15, 0.35, 0.30, 0.20];
$alternatifkriteria = [
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
];

// Data prediksi Kelembapan udara, curah hujan, penyinaran matahari, suhu rata-rata
$cuaca_acehBesar = [
    [83.67, 131.00, 5.96, 26.47],
    [82.00, 90.67, 6.52, 26.57],
    [83.67, 222.67, 5.73, 26.70],
    [84.33, 149.33, 6.00, 26.90],
    [82.67, 192.33, 4.66, 27.33],
    [79.67, 109.33, 5.49, 27.03],
    [77.67, 151.33, 5.16, 27.33],
    [78.67, 105.67, 5.38, 27.10],
    [79.67, 97.67, 4.56, 26.70],
    [81.00, 188.33, 3.90, 26.73],
    [88.33, 244.67, 3.58, 26.03],
    [87.00, 270.00, 4.23, 26.00]
];
$cuaca_bandaAceh = [
    [83.67, 131.00, 5.47, 26.47],
    [82.00, 90.67, 6.05, 26.57],
    [83.67, 222.67, 5.37, 26.7],
    [84.33, 149.33, 5.18, 26.9],
    [82.67, 192.33, 4.53, 27.33],
    [79.67, 109.33, 5.28, 27.03],
    [77.67, 151.33, 4.69, 27.33],
    [78.67, 105.67, 5.14, 27.1],
    [79.67, 97.67, 4.59, 26.7],
    [81.00, 188.33, 3.77, 26.73],
    [88.33, 244.67, 2.98, 26.03],
    [87.00, 270.00, 3.39, 26.00]
];
$cuaca_lhokseumawe = [
    [84.67, 89.33, 5.85, 26.17],
    [84.00, 141.00, 6.94, 26.27],
    [83.00, 68.33, 6.90, 26.60],
    [84.67, 157.33, 6.60, 26.90],
    [84.67, 192.00, 6.32, 27.23],
    [84.00, 173.33, 6.11, 26.83],
    [83.00, 80.67, 6.37, 27.03],
    [83.00, 96.33, 6.34, 26.93],
    [84.00, 54.00, 4.98, 26.73],
    [85.67, 212.00, 4.93, 26.57],
    [88.67, 217.67, 4.39, 25.97],
    [88.33, 329.67, 4.25, 25.63]
];

// Data prediksi harga cabai, bawang, padi
$harga_acehBesar = [
    [35033, 39100, 10900],
    [37833, 37067, 10917],
    [46517, 37600, 10917],
    [42583, 40150, 10917],
    [35600, 46283, 10917],
    [46183, 46883, 10917],
    [62417, 43850, 10950],
    [54633, 36100, 10900],
    [47183, 31567, 11100],
    [43167, 32633, 11200],
    [41350, 35350, 11200],
    [41850, 35550, 11200]
];
$harga_bandaAceh = [
    [30150, 37200, 10217],
    [35650, 36650, 10250],
    [43750, 36133, 10300],
    [39783, 37750, 10250],
    [34367, 46350, 10300],
    [41367, 43167, 10217],
    [56500, 41867, 10117],
    [54050, 33383, 10167],
    [45250, 32267, 10400],
    [42683, 33950, 10383],
    [39633, 34767, 10367],
    [38667, 34350, 10383]
];
$harga_lhokseumawe = [
    [31633, 33417, 10000],
    [35217, 33050, 9967],
    [41317, 35950, 9833],
    [37883, 38083, 9900],
    [31983, 43767, 9883],
    [40983, 45517, 9867],
    [52717, 41917, 9883],
    [49083, 31867, 10167],
    [42550, 28367, 10283],
    [40117, 30583, 10267],
    [40083, 33550, 10117],
    [38483, 31667, 10217]
];

$nama_bulan = [
    1 => "Januari",
    2 => "Februari",
    3 => "Maret",
    4 => "April",
    5 => "Mei",
    6 => "Juni",
    7 => "Juli",
    8 => "Agustus",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Desember"
];

$lokasi = $_POST['lokasi'];
$bulan = $_POST['bulan'];
$lahan = $_POST['lahan'];

// $lokasi = 'banda aceh';
// $bulan = 8;
// $lahan = 10000;

if ($lokasi == "banda aceh") {
    $data = $cuaca_bandaAceh[intval($bulan) - 1];
} elseif ($lokasi == "aceh besar") {
    $data = $cuaca_acehBesar[intval($bulan) - 1];
} elseif ($lokasi == "lhokseumawe") {
    $data = $cuaca_lhokseumawe[intval($bulan) - 1];
}


# 1. Kelembapan Udara
# Bawang....................................
if ($data[0] >= 55 && $data[0] < 65) {
    $alternatifkriteria[0][0] = 5;
} elseif (($data[0] >= 45 && $data[0] < 55) || ($data[0] >= 65 && $data[0] < 75)) {
    $alternatifkriteria[0][0] = 4;
} elseif (($data[0] >= 35 && $data[0] < 45) || ($data[0] >= 75 && $data[0] < 85)) {
    $alternatifkriteria[0][0] = 3;
} elseif (($data[0] >= 25 && $data[0] < 35) || ($data[0] >= 85 && $data[0] < 95)) {
    $alternatifkriteria[0][0] = 2;
} elseif ($data[0] < 25 || $data[0] >= 95) {
    $alternatifkriteria[0][0] = 1;
}
# Cabai.....................................
if ($data[0] >= 65 && $data[0] < 75) {
    $alternatifkriteria[1][0] = 5;
} elseif (($data[0] >= 55 && $data[0] < 65) || ($data[0] >= 75 && $data[0] < 85)) {
    $alternatifkriteria[1][0] = 4;
} elseif (($data[0] >= 45 && $data[0] < 55) || ($data[0] >= 85 && $data[0] < 95)) {
    $alternatifkriteria[1][0] = 3;
} elseif (($data[0] >= 35 && $data[0] < 45) || $data[0] >= 95) {
    $alternatifkriteria[1][0] = 2;
} elseif ($data[0] < 35) {
    $alternatifkriteria[1][0] = 1;
}
# Padi.....................................
if ($data[0] >= 75 && $data[0] < 85) {
    $alternatifkriteria[2][0] = 5;
} elseif (($data[0] >= 65 && $data[0] < 75) || $data[0] >= 85 && $data[0] < 95) {
    $alternatifkriteria[2][0] = 4;
} elseif (($data[0] >= 55 && $data[0] < 65) || $data[0] >= 95) {
    $alternatifkriteria[2][0] = 3;
} elseif ($data[0] >= 45 && $data[0] < 55) {
    $alternatifkriteria[2][0] = 2;
} elseif ($data[0] < 35) {
    $alternatifkriteria[2][0] = 1;
}

# 2. Curah Hujan
# Bawang....................................
if ($data[1] >= 90 && $data[1] < 100) {
    $alternatifkriteria[0][1] = 5;
} elseif (($data[1] >= 80 && $data[1] < 90) || ($data[1] >= 100 && $data[1] < 110)) {
    $alternatifkriteria[0][1] = 4;
} elseif (($data[1] >= 70 && $data[1] < 80) || ($data[1] >= 110 && $data[1] < 120)) {
    $alternatifkriteria[0][1] = 3;
} elseif (($data[1] >= 60 && $data[1] < 70) || ($data[1] >= 120 && $data[1] < 130)) {
    $alternatifkriteria[0][1] = 2;
} elseif ($data[1] < 60 || $data[1] >= 130) {
    $alternatifkriteria[0][1] = 1;
}
# Cabai.....................................
if ($data[1] >= 120 && $data[1] < 140) {
    $alternatifkriteria[1][1] = 5;
} elseif (($data[1] >= 100 && $data[1] < 120) || ($data[1] >= 140 && $data[1] < 160)) {
    $alternatifkriteria[1][1] = 4;
} elseif (($data[1] >= 80 && $data[1] < 100) || ($data[1] >= 160 && $data[1] < 180)) {
    $alternatifkriteria[1][1] = 3;
} elseif (($data[1] >= 60 && $data[1] < 80) || ($data[1] >= 180 && $data[1] < 200)) {
    $alternatifkriteria[1][1] = 2;
} elseif ($data[1] < 60 || $data[1] >= 200) {
    $alternatifkriteria[1][1] = 1;
}
# Padi.....................................
if ($data[1] >= 180 && $data[1] < 230) {
    $alternatifkriteria[2][1] = 5;
} elseif (($data[1] >= 160 && $data[1] < 180) || ($data[1] >= 230 && $data[1] < 250)) {
    $alternatifkriteria[2][1] = 4;
} elseif (($data[1] >= 140 && $data[1] < 160) || ($data[1] >= 250 && $data[1] < 270)) {
    $alternatifkriteria[2][1] = 3;
} elseif (($data[1] >= 120 && $data[1] < 140) || ($data[1] >= 270 && $data[1] < 290)) {
    $alternatifkriteria[2][1] = 2;
} elseif ($data[1] < 120 || $data[1] >= 290) {
    $alternatifkriteria[2][1] = 1;
}

# 3. Penyinaran Matahari
# Bawang....................................
if ($data[2] >= 8 && $data[2] < 9) {
    $alternatifkriteria[0][2] = 5;
} elseif (($data[2] >= 7 && $data[2] < 8) || ($data[2] >= 9 && $data[2] < 10)) {
    $alternatifkriteria[0][2] = 4;
} elseif (($data[2] >= 6 && $data[2] < 7) || ($data[2] >= 10 && $data[2] < 11)) {
    $alternatifkriteria[0][2] = 3;
} elseif (($data[2] >= 5 && $data[2] < 6) || ($data[2] >= 11 && $data[2] < 12)) {
    $alternatifkriteria[0][2] = 2;
} elseif ($data[2] < 5 || $data[2] >= 12) {
    $alternatifkriteria[0][2] = 1;
}
# Cabai.....................................
if ($data[2] >= 9 && $data[2] < 10) {
    $alternatifkriteria[1][2] = 5;
} elseif (($data[2] >= 8 && $data[2] < 9) || ($data[2] >= 10 && $data[2] < 11)) {
    $alternatifkriteria[1][2] = 4;
} elseif (($data[2] >= 7 && $data[2] < 8) || ($data[2] >= 11 && $data[2] < 12)) {
    $alternatifkriteria[1][2] = 3;
} elseif (($data[2] >= 6 && $data[2] < 7) || $data[2] >= 12) {
    $alternatifkriteria[1][2] = 2;
} elseif ($data[2] < 6) {
    $alternatifkriteria[1][2] = 1;
}
# Padi.....................................
if ($data[2] >= 11 && $data[2] < 12) {
    $alternatifkriteria[2][2] = 5;
} elseif ($data[2] >= 10 && $data[2] < 11) {
    $alternatifkriteria[2][2] = 4;
} elseif ($data[2] >= 9 && $data[2] < 10) {
    $alternatifkriteria[2][2] = 3;
} elseif ($data[2] >= 8 && $data[2] < 9) {
    $alternatifkriteria[2][2] = 2;
} elseif ($data[2] < 8) {
    $alternatifkriteria[2][2] = 1;
}

# 4. Suhu Rata-Rata
# Bawang....................................
if ($data[3] >= 28 && $data[3] < 30) {
    $alternatifkriteria[0][3] = 5;
} elseif (($data[3] >= 26 && $data[3] < 28) || ($data[3] >= 30 && $data[3] < 32)) {
    $alternatifkriteria[0][3] = 4;
} elseif (($data[3] >= 24 && $data[3] < 26) || ($data[3] >= 32 && $data[3] < 34)) {
    $alternatifkriteria[0][3] = 3;
} elseif (($data[3] >= 22 && $data[3] < 24) || ($data[3] >= 34 && $data[3] < 36)) {
    $alternatifkriteria[0][3] = 2;
} elseif ($data[3] < 22 || $data[3] >= 36) {
    $alternatifkriteria[0][3] = 1;
}
# Cabai.....................................
if ($data[3] >= 25 && $data[3] < 27) {
    $alternatifkriteria[1][3] = 5;
} elseif (($data[3] >= 23 && $data[3] < 25) || ($data[3] >= 27 && $data[3] < 29)) {
    $alternatifkriteria[1][3] = 4;
} elseif (($data[3] >= 21 && $data[3] < 23) || ($data[3] >= 29 && $data[3] < 31)) {
    $alternatifkriteria[1][3] = 3;
} elseif (($data[3] >= 19 && $data[3] < 21) || ($data[3] >= 31 && $data[3] < 33)) {
    $alternatifkriteria[1][3] = 2;
} elseif ($data[3] < 19 || $data[3] >= 33) {
    $alternatifkriteria[1][3] = 1;
}
# Padi.....................................
if ($data[3] >= 23 && $data[3] < 24) {
    $alternatifkriteria[2][3] = 5;
} elseif (($data[3] >= 22 && $data[3] < 23) || ($data[3] >= 24 && $data[3] < 25)) {
    $alternatifkriteria[2][3] = 4;
} elseif (($data[3] >= 21 && $data[3] < 22) || ($data[3] >= 25 && $data[3] < 26)) {
    $alternatifkriteria[2][3] = 3;
} elseif (($data[3] >= 20 && $data[3] < 21) || ($data[3] >= 26 && $data[3] < 27)) {
    $alternatifkriteria[2][3] = 2;
} elseif ($data[3] < 20 || $data[3] >= 27) {
    $alternatifkriteria[2][3] = 1;
}

$pembagi = array();
for ($i = 0; $i < count($kriteria); $i++) {
    $pembagi[] = 0;
    for ($j = 0; $j < count($alternatif); $j++) {
        if ($costbenefit[$i] == 'cost') {
            if ($j == 0) {
                $pembagi[$i] = $alternatifkriteria[$j][$i];
            } else {
                if ($pembagi[$i] > $alternatifkriteria[$j][$i]) {
                    $pembagi[$i] = $alternatifkriteria[$j][$i];
                }
            }
        } else { // if ($costbenefit[$i] == 'benefit')
            if ($j == 0) {
                $pembagi[$i] = $alternatifkriteria[$j][$i];
            } else {
                if ($pembagi[$i] < $alternatifkriteria[$j][$i]) {
                    $pembagi[$i] = $alternatifkriteria[$j][$i];
                }
            }
        }
    }
}

$normalisasi = array();
for ($i = 0; $i < count($alternatif); $i++) {
    $normalisasi[] = array();
    for ($j = 0; $j < count($kriteria); $j++) {
        $normalisasi[$i][] = 0;
        if ($costbenefit[$j] == 'cost') {
            $normalisasi[$i][$j] = $pembagi[$j] / $alternatifkriteria[$i][$j];
        } else { // if ($costbenefit[$j] == 'benefit')
            $normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
        }
    }
}

$hasil = array();
for ($i = 0; $i < count($alternatif); $i++) {
    $hasil[] = 0;
    for ($j = 0; $j < count($kriteria); $j++) {
        $hasil[$i] += ($normalisasi[$i][$j] * $bobot[$j]);
    }
}


// $peringkat = array_keys($hasil, rsort($hasil));

// Buat array untuk menyimpan indeks hasil
$peringkat = range(0, count($hasil) - 1);

// Urutkan array berdasarkan nilai hasil secara menurun
array_multisort(array_map(function ($value) {
    return $value * -1; // Dikali -1 untuk mendapatkan urutan menurun
}, $hasil), $peringkat);


// echo "<br>Dengan Kelembapan Udara: " . $data[0] . ' Curah Hujan: ' . $data[1] . ' Penyinaran Matahari: ' . $data[2] . ' dan Suhu Rata-Rata: ' . $data[3] . ' pada bulan ' . $bulan . ', maka saran tanaman yang baik adalah:';

$hasil_akhir[] = array($data[0], $data[1], $data[2], $data[3], $nama_bulan[$bulan]);


foreach ($peringkat as $rank => $index) {
    // echo "<br>" . ($rank + 1) . '. ' . $alternatif[$index] . " dengan nilai akurasi " . $hasil[$index];
    if ($alternatif[$index] == "Cabai") {
        $panen = floatval($lahan) * 0.9;
        $harga = [];
        if ($lokasi == "banda aceh") {
            foreach ($harga_bandaAceh as $row) {
                $harga[] = $row[0];
            }
        } elseif ($lokasi == "aceh besar") {
            foreach ($harga_acehBesar as $row) {
                $harga[] = $row[0];
            }
        } elseif ($lokasi == "lhokseumawe") {
            foreach ($harga_lhokseumawe as $row) {
                $harga[] = $row[0];
            }
        }
        $hargapanen = $harga[(intval($bulan) + 1) % count($harga)];
        $bulanpanen = (intval($bulan) + 2) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        $pendapatan = $hargapanen * $panen;
$pendapatanBersih = $pendapatan - (7200 * (float)$lahan);
        // echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        // echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$index] . " adalah " . $panen . " kg atau " . ($panen / 1000) . " ton";
        // echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen, 0, ',', '.');
        // echo "<br>~~Perkiraan total pendapatan Rp " . number_format(intval($hargapanen * $panen), 0, ',', '.');
        $hasil_akhir[] = array($alternatif[$index], $hasil[$index], $bulan_panen, $panen, ($panen / 1000), number_format($hargapanen, 0, ',', '.'), number_format(intval($hargapanen * $panen), 0, ',', '.'), number_format($pendapatanBersih));
    } elseif ($alternatif[$index] == "Bawang") {
        $panen = floatval($lahan) * 0.95;
        $harga = [];
        if ($lokasi == "banda aceh") {
            foreach ($harga_bandaAceh as $row) {
                $harga[] = $row[1];
            }
        } elseif ($lokasi == "aceh besar") {
            foreach ($harga_acehBesar as $row) {
                $harga[] = $row[1];
            }
        } elseif ($lokasi == "lhokseumawe") {
            foreach ($harga_lhokseumawe as $row) {
                $harga[] = $row[1];
            }
        }
        $hargapanen = $harga[intval($bulan) % count($harga)];
        $bulanpanen = (intval($bulan) + 1) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        $pendapatan = $hargapanen * $panen;
$pendapatanBersih = $pendapatan - (3400 * (float)$lahan);
        // echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        // echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$index] . " adalah " . $panen . " kg atau " . ($panen / 1000) . " ton";
        // echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen, 0, ',', '.');
        // echo "<br>~~Perkiraan total pendapatan Rp " . number_format(intval($hargapanen * $panen), 0, ',', '.');

        $hasil_akhir[] = array($alternatif[$index], $hasil[$index], $bulan_panen, $panen, ($panen / 1000), number_format($hargapanen, 0, ',', '.'), number_format(intval($hargapanen * $panen), 0, ',', '.'), number_format($pendapatanBersih));
    } elseif ($alternatif[$index] == "Padi") {
        $panen = floatval($lahan) * 0.7;
        $harga = [];
        if ($lokasi == "banda aceh") {
            foreach ($harga_bandaAceh as $row) {
                $harga[] = $row[2];
            }
        } elseif ($lokasi == "aceh besar") {
            foreach ($harga_acehBesar as $row) {
                $harga[] = $row[2];
            }
        } elseif ($lokasi == "lhokseumawe") {
            foreach ($harga_lhokseumawe as $row) {
                $harga[] = $row[2];
            }
        }
        $hargapanen = $harga[(intval($bulan) + 2) % count($harga)];
        $bulanpanen = (intval($bulan) + 3) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        $pendapatan = $hargapanen * $panen;
$pendapatanBersih = $pendapatan - (930 * (float)$lahan);
        // echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        // echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$index] . " adalah " . $panen . " kg atau " . ($panen / 1000) . " ton";
        // echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen, 0, ',', '.');
        // echo "<br>~~Perkiraan total pendapatan Rp " . number_format(intval($hargapanen * $panen), 0, ',', '.');

        $hasil_akhir[] = array($alternatif[$index], $hasil[$index], $bulan_panen, $panen, ($panen / 1000), number_format($hargapanen, 0, ',', '.'), number_format(intval($hargapanen * $panen), 0, ',', '.'), number_format($pendapatanBersih));
    }
}


// echo '<br><br>';


// echo '// Data : Kelembapan Udara, Curah Hujan, Penyinaran Matahari, Suhu Rata-Rata. => var = $data' . '<br>';
// echo json_encode($data);
// echo '<br><br>';

// echo '// data rekomendasi : . => var = $hasil_akhir <br>';
echo json_encode($hasil_akhir);



// $result = print_r($hasil_akhir, true);
// echo '<pre>';
// print_r($result);
// echo '</pre>';

// echo '<br><br>';
