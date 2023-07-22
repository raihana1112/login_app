<?php 

echo "<br>Menentukan Jenis Tanaman Menggunakan Metode SAW menggunakan php";
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
$harga_acehBesar =[
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
    [41317, 35950, 9833,],
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


// $lokasi = "input ("Lokasi Penanaman: ")";
// $bulan = input ("Bulan Tanam: ");
// $lahan = input ("Luas Lahan(m2):");

$lokasi = "banda aceh";
$bulan = 12;
$lahan = 10000;

if ($lokasi == "banda aceh") {
    $data = $cuaca_bandaAceh[intval($bulan) - 1];
} elseif ($lokasi == "aceh besar") {
    $data = $cuaca_acehBesar[intval($bulan) - 1];
} elseif ($lokasi == "lhokseumawe") {
    $data = $cuaca_lhokseumawe[intval($bulan) - 1];
}


// 1. Kelembapan Udara
  // Bawang....................................
if ($data[0] >= 55 and $data[0] < 65) {
  $alternatifkriteria[0][0] = 5;
} elseif (($data[0] >= 45 and $data[0] < 55) or ($data[0] >= 65 and $data[0] < 75)) {
  $alternatifkriteria[0][0] = 4;
} elseif (($data[0] >= 35 and $data[0] < 45) or ($data[0] >= 75 and $data[0] < 85)) {
  $alternatifkriteria[0][0] = 3;
} elseif (($data[0] >= 25 and $data[0] < 35) or ($data[0] >= 85 and $data[0] < 95)) {
  $alternatifkriteria[0][0] = 2;
} elseif ($data[0] < 25 or $data[0] >= 95) {
  $alternatifkriteria[0][0] = 1;
}
  // Cabai.....................................
if ($data[0] >= 65 and $data[0] < 75) {
  $alternatifkriteria[1][0] = 5;
} elseif (($data[0] >= 55 and $data[0] < 65) or ($data[0] >= 75 and $data[0] < 85)) {
  $alternatifkriteria[1][0] = 4;
} elseif (($data[0] >= 45 and $data[0] < 55) or ($data[0] >= 85 and $data[0] < 95)) {
  $alternatifkriteria[1][0] = 3;
} elseif (($data[0] >= 35 and $data[0] < 45) or ($data[0] >= 95)) {
  $alternatifkriteria[1][0] = 2;
} elseif ($data[0] < 35) {
  $alternatifkriteria[1][0] = 1;
}
  // Padi.....................................
if ($data[0] >= 75 and $data[0] < 85) {
  $alternatifkriteria[2][0] = 5;
} elseif (($data[0] >= 65 and $data[0] < 75) or ($data[0] >= 85 and $data[0] < 95)) {
  $alternatifkriteria[2][0] = 4;
} elseif (($data[0] >= 55 and $data[0] < 65) or ($data[0] >= 95)) {
  $alternatifkriteria[2][0] = 3;
} elseif ($data[0] >= 45 and $data[0] < 55) {
  $alternatifkriteria[2][0] = 2;
} elseif ($data[0] < 35) {
  $alternatifkriteria[2][0] = 1;
}

$pembagi = [];
for ($i=0; $i < count($kriteria); $i++) {
    $pembagi[$i] = 0;
    for ($j=0; $j < count($alternatif); $j++) {
        if ($costbenefit[$i] == 'cost') {
            if ($j == 0) {
                $pembagi[$i] = $alternatifkriteria[$j][$i];
            } else {
                if ($pembagi[$i] > $alternatifkriteria[$j][$i]) {
                    $pembagi[$i] = $alternatifkriteria[$j][$i];
                }
            }
        } else {
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
    $normalisasi[$i] = array();
    for ($j = 0; $j < count($kriteria); $j++) {
        $normalisasi[$i][] = 0;
        if ($pembagi[$j] != 0) {
            if ($costbenefit[$j] == 'cost') {
                $normalisasi[$i][$j] = $pembagi[$j] / $alternatifkriteria[$i][$j];
            } else {
                $normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
            }
        } else {
            // Jika pembagi adalah nol, atur normalisasi menjadi nol atau nilai yang sesuai dengan logika aplikasi.
            // Contoh: $normalisasi[$i][$j] = 0; atau $normalisasi[$i][$j] = 1; (tergantung logika bisnis)
            $normalisasi[$i][$j] = 0;
        }
    }
}




$hasil = [];
for ($i=0; $i < count($alternatif); $i++) {
    $hasil[$i] = 0;
    for ($j=0; $j < count($kriteria); $j++) {
        $hasil[$i] = $hasil[$i] + ($normalisasi[$i][$j] * $bobot[$j]);
    }
}

$peringkat = array_keys($hasil, max($hasil));
echo "<br>\nDengan Kelembapan Udara:".$data[0].'Curah Hujan: '.$data[1].'Penyinaran Matahari :'.$data[2].'dan Suhu Rata-Rata :'.$data[3].'pada bulan'.$bulan.', maka saran tanaman yang baik adalah :';
for ($rank=0; $rank < count($peringkat); $rank++) {
    echo "<br>" . $rank+1 . '.' . $alternatif[$peringkat[$rank]] . " dengan nilai akurasi " . $hasil[$peringkat[$rank]];
    if ($alternatif[$peringkat[$rank]] == "Cabai") {
        $panen = $lahan * 0.9;
        if ($lokasi == "banda aceh") {
            $harga = [];
            for ($row=0; $row < count($harga_bandaAceh); $row++) {
                $harga[$row] = $harga_bandaAceh[$row][0];
            }
            $hargapanen = $harga[($bulan+1) % count($harga)];
        } elseif ($lokasi == "aceh besar") {
            $harga = [];
            for ($row=0; $row < count($harga_acehBesar); $row++) {
                $harga[$row] = $harga_acehBesar[$row][0];
            }
            $hargapanen = $harga[($bulan+1) % count($harga)];
        } elseif ($lokasi == "lhokseumawe") {
            $harga = [];
            for ($row=0; $row < count($harga_lhokseumawe); $row++) {
                $harga[$row] = $harga_lhokseumawe[$row][0];
            }
            $hargapanen = $harga[($bulan+1) % count($harga)];
        }
        $bulanpanen = ($bulan + 2) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$peringkat[$rank]] . " adalah " . $panen . " kg atau " . $panen/1000 . " ton";
        echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen);
        echo "<br>~~Perkiraan total pendapatan Rp " . number_format($hargapanen * $panen);
    } elseif ($alternatif[$peringkat[$rank]] == "Bawang") {
        $panen = $lahan * 0.95;
        if ($lokasi == "banda aceh") {
            $harga = [];
            for ($row=0; $row < count($harga_bandaAceh); $row++) {
                $harga[$row] = $harga_bandaAceh[$row][1];
            }
            $hargapanen = $harga[$bulan % count($harga)];
        } elseif ($lokasi == "aceh besar") {
            $harga = [];
            for ($row=0; $row < count($harga_acehBesar); $row++) {
                $harga[$row] = $harga_acehBesar[$row][1];
            }
            $hargapanen = $harga[$bulan % count($harga)];
        } elseif ($lokasi == "lhokseumawe") {
            $harga = [];
            for ($row=0; $row < count($harga_lhokseumawe); $row++) {
                $harga[$row] = $harga_lhokseumawe[$row][1];
            }
            $hargapanen = $harga[$bulan % count($harga)];
        }
        $bulanpanen = ($bulan + 1) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$peringkat[$rank]] . " adalah " . $panen . " kg atau " . $panen/1000 . " ton";
        echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen);
        echo "<br>~~Perkiraan total pendapatan Rp " . number_format($hargapanen * $panen);
    } elseif ($alternatif[$peringkat[$rank]] == "Padi") {
        $panen = $lahan * 0.7;
        if ($lokasi == "banda aceh") {
            $harga = [];
            for ($row=0; $row < count($harga_bandaAceh); $row++) {
                $harga[$row] = $harga_bandaAceh[$row][2];
            }
            $hargapanen = $harga[($bulan+2) % count($harga)];
        } elseif ($lokasi == "aceh besar") {
            $harga = [];
            for ($row=0; $row < count($harga_acehBesar); $row++) {
                $harga[$row] = $harga_acehBesar[$row][2];
            }
            $hargapanen = $harga[($bulan+2) % count($harga)];
        } elseif ($lokasi == "lhokseumawe") {
            $harga = [];
            for ($row=0; $row < count($harga_lhokseumawe); $row++) {
                $harga[$row] = $harga_lhokseumawe[$row][2];
            }
            $hargapanen = $harga[($bulan+2) % count($harga)];
        }
        $bulanpanen = ($bulan + 3) % 12;
        if ($bulanpanen == 0) {
            $bulanpanen = 12;
        }
        $bulan_panen = $nama_bulan[$bulanpanen];
        echo "<br>~~Perkiraan Panen bulan " . $bulan_panen;
        echo "<br>~~Perkiraan hasil panen dari " . $alternatif[$peringkat[$rank]] . " adalah " . $panen . " kg atau " . $panen/1000 . " ton";
        echo "<br>~~Perkiraan harga panen Rp " . number_format($hargapanen);
        echo "<br>~~Perkiraan total pendapatan Rp " . number_format($hargapanen * $panen);
    }
}



 ?>