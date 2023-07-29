<?php


$alternatif = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$kriteria = ["Kelembapan Udara", "Curah Hujan", "Penyinaran Matahari", "Suhu", "Harga"];
$costbenefit = ["benefit", "benefit", "benefit", "benefit", "benefit"];
$bobot = [0.15, 0.25, 0.25, 0.20, 0.15];

$alternatifkriteria = [
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0]
];

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

$lokasi = $_POST['lokasi'];
$jenis = $_POST['jenis'];
$lahan = $_POST['lahan'];
$bulan = $_POST['bulan'];

// $lokasi = 'banda aceh';
// $jenis = 'cabai';
// $lahan = '10000';
// $bulan = '8';

if ($lokasi == "banda aceh") {
    $data = $cuaca_bandaAceh;
    if ($jenis == "cabai") {
        $C5 = array();
        foreach ($harga_bandaAceh as $row) {
            $C5[] = $row[0];
        }
    } elseif ($jenis == "bawang") {
        $C5 = array();
        foreach ($harga_bandaAceh as $row) {
            $C5[] = $row[1];
        }
    } elseif ($jenis == "padi") {
        $C5 = array();
        foreach ($harga_bandaAceh as $row) {
            $C5[] = $row[2];
        }
    }
} elseif ($lokasi == "aceh besar") {
    $data = $cuaca_acehBesar;
    if ($jenis == "cabai") {
        $C5 = array();
        foreach ($harga_acehBesar as $row) {
            $C5[] = $row[0];
        }
    } elseif ($jenis == "bawang") {
        $C5 = array();
        foreach ($harga_acehBesar as $row) {
            $C5[] = $row[1];
        }
    } elseif ($jenis == "padi") {
        $C5 = array();
        foreach ($harga_acehBesar as $row) {
            $C5[] = $row[2];
        }
    }
} elseif ($lokasi == "lhokseumawe") {
    $data = $cuaca_lhokseumawe;
    if ($jenis == "cabai") {
        $C5 = array();
        foreach ($harga_lhokseumawe as $row) {
            $C5[] = $row[0];
        }
    } elseif ($jenis == "bawang") {
        $C5 = array();
        foreach ($harga_lhokseumawe as $row) {
            $C5[] = $row[1];
        }
    } elseif ($jenis == "padi") {
        $C5 = array();
        foreach ($harga_lhokseumawe as $row) {
            $C5[] = $row[2];
        }
    }
}



if ($jenis == "cabai") {
    // Kelembapan Udara
    $C1 = array();
    foreach ($data as $row) {
        $C1[] = $row[0];
        for ($i = 0; $i < count($C1); $i++) {
            if ($C1[$i] >= 65 && $C1[$i] < 75) {
                $alternatifkriteria[$i][0] = 5;
            } elseif (($C1[$i] >= 55 && $C1[$i] < 65) || ($C1[$i] >= 75 && $C1[$i] < 85)) {
                $alternatifkriteria[$i][0] = 4;
            } elseif (($C1[$i] >= 45 && $C1[$i] < 55) || ($C1[$i] >= 85 && $C1[$i] < 95)) {
                $alternatifkriteria[$i][0] = 3;
            } elseif (($C1[$i] >= 35 && $C1[$i] < 45) || ($C1[$i] >= 95)) {
                $alternatifkriteria[$i][0] = 2;
            } elseif ($C1[$i] < 35) {
                $alternatifkriteria[$i][0] = 1;
            }
        }
    }
    // Curah Hujan
    $C2 = array();
    foreach ($data as $row) {
        $C2[] = $row[1];
        for ($i = 0; $i < count($C2); $i++) {
            if ($C2[$i] >= 120 && $C2[$i] < 140) {
                $alternatifkriteria[$i][1] = 5;
            } elseif (($C2[$i] >= 100 && $C2[$i] < 120) || ($C2[$i] >= 140 && $C2[$i] < 160)) {
                $alternatifkriteria[$i][1] = 4;
            } elseif (($C2[$i] >= 80 && $C2[$i] < 100) || ($C2[$i] >= 160 && $C2[$i] < 180)) {
                $alternatifkriteria[$i][1] = 3;
            } elseif (($C2[$i] >= 60 && $C2[$i] < 80) || ($C2[$i] >= 180 && $C2[$i] < 200)) {
                $alternatifkriteria[$i][1] = 2;
            } elseif ($C2[$i] < 60 || $C2[$i] >= 200) {
                $alternatifkriteria[$i][1] = 1;
            }
        }
    }
    // Penyinaran Matahari
    $C3 = array();
    foreach ($data as $row) {
        $C3[] = $row[2];
        for ($i = 0; $i < count($C3); $i++) {
            if ($C3[$i] >= 9 && $C3[$i] < 10) {
                $alternatifkriteria[$i][2] = 5;
            } elseif (($C3[$i] >= 8 && $C3[$i] < 9) || ($C3[$i] >= 10 && $C3[$i] < 11)) {
                $alternatifkriteria[$i][2] = 4;
            } elseif (($C3[$i] >= 7 && $C3[$i] < 8) || ($C3[$i] >= 11 && $C3[$i] < 12)) {
                $alternatifkriteria[$i][2] = 3;
            } elseif (($C3[$i] >= 6 && $C3[$i] < 7) || ($C3[$i] >= 12)) {
                $alternatifkriteria[$i][2] = 2;
            } elseif ($C3[$i] < 6) {
                $alternatifkriteria[$i][2] = 1;
            }
        }
    }
    // Suhu Rata-Rata
    $C4 = array();
    foreach ($data as $row) {
        $C4[] = $row[3];
        for ($i = 0; $i < count($C4); $i++) {
            if ($C4[$i] >= 25 && $C4[$i] < 27) {
                $alternatifkriteria[$i][3] = 5;
            } elseif (($C4[$i] >= 23 && $C4[$i] < 25) || ($C4[$i] >= 27 && $C4[$i] < 29)) {
                $alternatifkriteria[$i][3] = 4;
            } elseif (($C4[$i] >= 21 && $C4[$i] < 23) || ($C4[$i] >= 29 && $C4[$i] < 31)) {
                $alternatifkriteria[$i][3] = 3;
            } elseif (($C4[$i] >= 19 && $C4[$i] < 21) || ($C4[$i] >= 31 && $C4[$i] < 33)) {
                $alternatifkriteria[$i][3] = 2;
            } elseif ($C4[$i] < 19 || $C4[$i] >= 33) {
                $alternatifkriteria[$i][3] = 1;
            }
        }
    }
    // Harga
    for ($i = 0; $i < count($C5); $i++) {
        $indexC5 = ($i + 2) % count($C5);
        if ($C5[$indexC5] >= 50000 && $C5[$indexC5] < 60000) {
            $alternatifkriteria[$i][4] = 5;
        } elseif (($C5[$indexC5] >= 40000 && $C5[$indexC5] < 50000) || ($C5[$indexC5] >= 60000 && $C5[$indexC5] < 70000)) {
            $alternatifkriteria[$i][4] = 4;
        } elseif (($C5[$indexC5] >= 30000 && $C5[$indexC5] < 40000) || ($C5[$indexC5] >= 70000 && $C5[$indexC5] < 80000)) {
            $alternatifkriteria[$i][4] = 3;
        } elseif (($C5[$indexC5] >= 20000 && $C5[$indexC5] < 30000) || ($C5[$indexC5] >= 80000 && $C5[$indexC5] < 90000)) {
            $alternatifkriteria[$i][4] = 2;
        } elseif ($C5[$indexC5] < 20000 || $C5[$indexC5] >= 90000) {
            $alternatifkriteria[$i][4] = 1;
        }
    }
} elseif ($jenis == "bawang") {
    // Kelembapan Udara
    $C1 = array();
    foreach ($data as $row) {
        $C1[] = $row[0];
        for ($i = 0; $i < count($C1); $i++) {
            if ($C1[$i] >= 55 && $C1[$i] < 65) {
                $alternatifkriteria[$i][0] = 5;
            } elseif (($C1[$i] >= 45 && $C1[$i] < 55) || ($C1[$i] >= 65 && $C1[$i] < 75)) {
                $alternatifkriteria[$i][0] = 4;
            } elseif (($C1[$i] >= 35 && $C1[$i] < 45) || ($C1[$i] >= 75 && $C1[$i] < 85)) {
                $alternatifkriteria[$i][0] = 3;
            } elseif (($C1[$i] >= 25 && $C1[$i] < 35) || ($C1[$i] >= 85 && $C1[$i] < 95)) {
                $alternatifkriteria[$i][0] = 2;
            } elseif ($C1[$i] < 25 || $C1[$i] >= 95) {
                $alternatifkriteria[$i][0] = 1;
            }
        }
    }
    // Curah Hujan
    $C2 = array();
    foreach ($data as $row) {
        $C2[] = $row[1];
        for ($i = 0; $i < count($C2); $i++) {
            if ($C2[$i] >= 90 && $C2[$i] < 100) {
                $alternatifkriteria[$i][1] = 5;
            } elseif (($C2[$i] >= 80 && $C2[$i] < 90) || ($C2[$i] >= 100 && $C2[$i] < 110)) {
                $alternatifkriteria[$i][1] = 4;
            } elseif (($C2[$i] >= 70 && $C2[$i] < 80) || ($C2[$i] >= 110 && $C2[$i] < 120)) {
                $alternatifkriteria[$i][1] = 3;
            } elseif (($C2[$i] >= 60 && $C2[$i] < 70) || ($C2[$i] >= 120 && $C2[$i] < 130)) {
                $alternatifkriteria[$i][1] = 2;
            } elseif ($C2[$i] < 60 || $C2[$i] >= 130) {
                $alternatifkriteria[$i][1] = 1;
            }
        }
    }
    // Penyinaran Matahari
    $C3 = array();
    foreach ($data as $row) {
        $C3[] = $row[2];
        for ($i = 0; $i < count($C3); $i++) {
            if ($C3[$i] >= 8 && $C3[$i] < 9) {
                $alternatifkriteria[$i][2] = 5;
            } elseif (($C3[$i] >= 7 && $C3[$i] < 8) || ($C3[$i] >= 9 && $C3[$i] < 10)) {
                $alternatifkriteria[$i][2] = 4;
            } elseif (($C3[$i] >= 6 && $C3[$i] < 7) || ($C3[$i] >= 10 && $C3[$i] < 11)) {
                $alternatifkriteria[$i][2] = 3;
            } elseif (($C3[$i] >= 5 && $C3[$i] < 6) || ($C3[$i] >= 11 && $C3[$i] < 12)) {
                $alternatifkriteria[$i][2] = 2;
            } elseif ($C3[$i] < 5 || $C3[$i] >= 12) {
                $alternatifkriteria[$i][2] = 1;
            }
        }
    }
    // Suhu Rata-Rata
    $C4 = array();
    foreach ($data as $row) {
        $C4[] = $row[3];
        for ($i = 0; $i < count($C4); $i++) {
            if ($C4[$i] >= 28 && $C4[$i] < 30) {
                $alternatifkriteria[$i][3] = 5;
            } elseif (($C4[$i] >= 26 && $C4[$i] < 28) || ($C4[$i] >= 30 && $C4[$i] < 32)) {
                $alternatifkriteria[$i][3] = 4;
            } elseif (($C4[$i] >= 24 && $C4[$i] < 26) || ($C4[$i] >= 32 && $C4[$i] < 34)) {
                $alternatifkriteria[$i][3] = 3;
            } elseif (($C4[$i] >= 22 && $C4[$i] < 24) || ($C4[$i] >= 34 && $C4[$i] < 36)) {
                $alternatifkriteria[$i][3] = 2;
            } elseif ($C4[$i] < 22 || $C4[$i] >= 36) {
                $alternatifkriteria[$i][3] = 1;
            }
        }
    }
    // Harga
    for ($i = 0; $i < count($C5); $i++) {
        $indexC5 = ($i + 1) % count($C5);
        if ($C5[$indexC5] >= 35000 && $C5[$indexC5] < 40000) {
            $alternatifkriteria[$i][4] = 5;
        } elseif (($C5[$indexC5] >= 30000 && $C5[$indexC5] < 35000) || ($C5[$indexC5] >= 40000 && $C5[$indexC5] < 45000)) {
            $alternatifkriteria[$i][4] = 4;
        } elseif (($C5[$indexC5] >= 25000 && $C5[$indexC5] < 30000) || ($C5[$indexC5] >= 45000 && $C5[$indexC5] < 50000)) {
            $alternatifkriteria[$i][4] = 3;
        } elseif (($C5[$indexC5] >= 20000 && $C5[$indexC5] < 25000) || ($C5[$indexC5] >= 50000 && $C5[$indexC5] < 55000)) {
            $alternatifkriteria[$i][4] = 2;
        } elseif ($C5[$indexC5] < 20000 || $C5[$indexC5] >= 55000) {
            $alternatifkriteria[$i][4] = 1;
        }
    }
} elseif ($jenis == "padi") {
    // Kelembapan Udara
    $C1 = array();
    foreach ($data as $row) {
        $C1[] = $row[0];
        for ($i = 0; $i < count($C1); $i++) {
            if ($C1[$i] >= 75 && $C1[$i] < 85) {
                $alternatifkriteria[$i][0] = 5;
            } elseif (($C1[$i] >= 65 && $C1[$i] < 75) || ($C1[$i] >= 85 && $C1[$i] < 95)) {
                $alternatifkriteria[$i][0] = 4;
            } elseif (($C1[$i] >= 55 && $C1[$i] < 65) || ($C1[$i] >= 95)) {
                $alternatifkriteria[$i][0] = 3;
            } elseif ($C1[$i] >= 45 && $C1[$i] < 55) {
                $alternatifkriteria[$i][0] = 2;
            } elseif ($C1[$i] < 35) {
                $alternatifkriteria[$i][0] = 1;
            }
        }
    }
    // Curah Hujan
    $C2 = array();
    foreach ($data as $row) {
        $C2[] = $row[1];
        for ($i = 0; $i < count($C2); $i++) {
            if ($C2[$i] >= 180 && $C2[$i] < 230) {
                $alternatifkriteria[$i][1] = 5;
            } elseif (($C2[$i] >= 160 && $C2[$i] < 180) || ($C2[$i] >= 230 && $C2[$i] < 250)) {
                $alternatifkriteria[$i][1] = 4;
            } elseif (($C2[$i] >= 140 && $C2[$i] < 160) || ($C2[$i] >= 250 && $C2[$i] < 270)) {
                $alternatifkriteria[$i][1] = 3;
            } elseif (($C2[$i] >= 120 && $C2[$i] < 140) || ($C2[$i] >= 270 && $C2[$i] < 290)) {
                $alternatifkriteria[$i][1] = 2;
            } elseif ($C2[$i] < 120 || $C2[$i] >= 290) {
                $alternatifkriteria[$i][1] = 1;
            }
        }
    }
    // Penyinaran Matahari
    $C3 = array();
    foreach ($data as $row) {
        $C3[] = $row[2];
        for ($i = 0; $i < count($C3); $i++) {
            if ($C3[$i] >= 11 && $C3[$i] < 12) {
                $alternatifkriteria[$i][2] = 5;
            } elseif (($C3[$i] >= 10 && $C3[$i] < 11) || ($C3[$i] >= 12 && $C3[$i] < 13)) {
                $alternatifkriteria[$i][2] = 4;
            } elseif (($C3[$i] >= 9 && $C3[$i] < 10) || ($C3[$i] >= 13 && $C3[$i] < 14)) {
                $alternatifkriteria[$i][2] = 3;
            } elseif (($C3[$i] >= 8 && $C3[$i] < 9) || ($C3[$i] >= 14 && $C3[$i] < 15)) {
                $alternatifkriteria[$i][2] = 2;
            } elseif ($C3[$i] < 8) {
                $alternatifkriteria[$i][2] = 1;
            }
        }
    }
    // Suhu Rata-Rata
    $C4 = array();
    foreach ($data as $row) {
        $C4[] = $row[3];
        for ($i = 0; $i < count($C4); $i++) {
            if ($C4[$i] >= 28 && $C4[$i] < 31) {
                $alternatifkriteria[$i][3] = 5;
            } elseif (($C4[$i] >= 26 && $C4[$i] < 28) || ($C4[$i] >= 31 && $C4[$i] < 33)) {
                $alternatifkriteria[$i][3] = 4;
            } elseif (($C4[$i] >= 24 && $C4[$i] < 26) || ($C4[$i] >= 33 && $C4[$i] < 35)) {
                $alternatifkriteria[$i][3] = 3;
            } elseif (($C4[$i] >= 22 && $C4[$i] < 24) || ($C4[$i] >= 35 && $C4[$i] < 37)) {
                $alternatifkriteria[$i][3] = 2;
            } elseif ($C4[$i] < 22 || $C4[$i] >= 37) {
                $alternatifkriteria[$i][3] = 1;
            }
        }
    }
    // Harga
    for ($i = 0; $i < count($C5); $i++) {
        $indexC5 = ($i + 1) % count($C5);
        if ($C5[$indexC5] >= 20000 && $C5[$indexC5] < 30000) {
            $alternatifkriteria[$i][4] = 5;
        } elseif (($C5[$indexC5] >= 15000 && $C5[$indexC5] < 20000) || ($C5[$indexC5] >= 30000 && $C5[$indexC5] < 35000)) {
            $alternatifkriteria[$i][4] = 4;
        } elseif (($C5[$indexC5] >= 10000 && $C5[$indexC5] < 15000) || ($C5[$indexC5] >= 35000 && $C5[$indexC5] < 40000)) {
            $alternatifkriteria[$i][4] = 3;
        } elseif (($C5[$indexC5] >= 5000 && $C5[$indexC5] < 10000) || ($C5[$indexC5] >= 40000 && $C5[$indexC5] < 45000)) {
            $alternatifkriteria[$i][4] = 2;
        } elseif ($C5[$indexC5] < 5000 || $C5[$indexC5] >= 45000) {
            $alternatifkriteria[$i][4] = 1;
        }
    }
} else {
    // Tampilkan pesan jika jenis tanaman tidak valid
    echo "Jenis tanaman tidak valid.";
    exit;
};

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
        } else { // if $costbenefit[$i] == 'benefit':
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
    $normalisasi[] = array($i);
    for ($j = 0; $j < count($kriteria); $j++) {
        $normalisasi[$i][] = 0;
        if ($costbenefit[$j] == 'cost') {
            $normalisasi[$i][$j] = $pembagi[$j] / $alternatifkriteria[$i][$j];
        } else { // if $costbenefit[$j] == 'benefit':
            $normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
        }
    }
}

$hasil = array();
for ($i = 0; $i < count($alternatif); $i++) {
    $hasil[] = 0;
    for ($j = 0; $j < count($kriteria); $j++) {
        $hasil[$i] += $normalisasi[$i][$j] * $bobot[$j];
    }
}

if ($jenis == "cabai") {
    $panen = floatval($lahan) * 0.90;
    $bulanpanen = (intval($bulan) + 2) % 12;
    if ($bulanpanen == 0) {
        $bulanpanen = 12;
    }
    $bulan_panen = $nama_bulan[$bulanpanen];
} elseif ($jenis == "bawang") {
    $panen = floatval($lahan) * 0.95;
    $bulanpanen = (intval($bulan) + 1) % 12;
    if ($bulanpanen == 0) {
        $bulanpanen = 12;
    }
    $bulan_panen = $nama_bulan[$bulanpanen];
} elseif ($jenis == "padi") {
    $panen = floatval($lahan) * 0.70;
    $bulanpanen = (intval($bulan) + 3) % 12;
    if ($bulanpanen == 0) {
        $bulanpanen = 12;
    }
    $bulan_panen = $nama_bulan[$bulanpanen];
}

// echo "<br>Perkiraan jumlah hasil panen dari komoditas " . $jenis . " adalah " . $panen . " kg atau " . $panen / 1000 . " ton";
// echo "<br>Perkiraan panen pada bulan " . $bulan_panen;

$hasil_akhir[] =  array($nama_bulan[$bulan], $jenis,$panen,$panen / 1000,$bulan_panen);




// echo "<br>~~~~~~~~~~~~";
$bulan = intval($bulan);
$lanjut = array_slice($alternatif, $bulan - 1, 3);
// echo "<br>Nilai hasil perhitungan berdasarkan bulan tanam terdekat dari komoditas " . $jenis . " adalah :";
foreach ($lanjut as $i => $bulan) {
    $index = array_search($bulan, $alternatif);
    $skor = $hasil[$index];
    // echo "<br>" . ($i + 1) . " Bulan " . $bulan . " dengan nilai " . $skor;
    if ($jenis == "cabai") {
        $panen = floatval($lahan) * 0.90;
        $indexC5 = ($index + 2) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (7200 * (float)$lahan);
    } elseif ($jenis == "bawang") {
        $panen = floatval($lahan) * 0.95;
        $indexC5 = ($index + 1) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (3400 * (float)$lahan);
    } elseif ($jenis == "padi") {
        $panen = floatval($lahan) * 0.70;
        $indexC5 = ($index + 3) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (930 * (float)$lahan);
    }
    // echo "<br>~~~Kelembapan Udara: " . $C1[$index] . ' Curah Hujan: ' . $C2[$index] . ' Penyinaran Matahari: ' . $C3[$index] . ' Suhu Rata-Rata: ' . $C4[$index] .
    //     " dan Harga Rp " . number_format($C5[$indexC5]) . " dengan perkiraan total pendapatan Rp " . number_format(intval($C5[$indexC5] * $panen));

    $hasil_akhir[] = array($alternatif[$index], number_format($C5[$indexC5]),number_format(intval($C5[$indexC5] * $panen)), number_format($pendapatanBersih), $C1[$index], $C2[$index], $C3[$index], $C4[$index]);
}

// echo "<br>\n~~~~~~~~~~~~";
$peringkat = range(0, count($hasil) - 1);

// Urutkan array berdasarkan nilai hasil secara menurun
array_multisort(array_map(function ($value) {
    return $value * -1; // Dikali -1 untuk mendapatkan urutan menurun
}, $hasil), $peringkat);


// echo "<br>Nilai hasil Perhitungan berdasarkan waktu tanam terbaik dari komoditas " . $jenis . " adalah :";
foreach (array_slice($peringkat, 0, 3) as $rank => $index) {
    // echo "<br>" . ($rank + 1) . " Bulan " . $alternatif[$index] . " dengan nilai " . $hasil[$index];
    if ($jenis == "cabai") {
        $panen = floatval($lahan) * 0.90;
        $indexC5 = ($index + 2) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (7200 * (float)$lahan);
    } elseif ($jenis == "bawang") {
        $panen = floatval($lahan) * 0.95;
        $indexC5 = ($index + 1) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (3400 * (float)$lahan);
    } elseif ($jenis == "padi") {
        $panen = floatval($lahan) * 0.70;
        $indexC5 = ($index + 3) % count($C5);
        $pendapatan = $C5[$indexC5] * $panen;
$pendapatanBersih = $pendapatan - (930 * (float)$lahan);
    }
    // echo "<br>~~~Kelembapan Udara: " . $C1[$index] . ' Curah Hujan: ' . $C2[$index] . ' Penyinaran Matahari: ' . $C3[$index] . ' Suhu Rata-Rata: ' . $C4[$index] .
    //     " dan Harga Rp " . number_format($C5[$indexC5]) . " dengan perkiraan total pendapatan Rp " . number_format(intval($C5[$indexC5] * $panen));

    $hasil_akhir[] = array($alternatif[$index], number_format($C5[$indexC5]),number_format(intval($C5[$indexC5] * $panen)), number_format($pendapatanBersih), $C1[$index], $C2[$index], $C3[$index], $C4[$index]);
}

// echo '<br><br><br>';

// echo '//data rekomendasi => var = $data_rekom';
// echo '<br>' . json_encode($data_rekom) . ' <br><br>';

// echo '//data prediksi => var = $hasil_akhir <br>';
echo json_encode($hasil_akhir);

