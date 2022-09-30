<?php
//array scalar (1 dimensi)
$m1 = ['nim' => '092', 'nama' => 'Andika Suzuki', 'nilai' => 98];
$m2 = ['nim' => '102', 'nama' => 'Honda Megaputri', 'nilai' => 51];
$m3 = ['nim' => '106', 'nama' => 'Van de Lylana', 'nilai' => 66];
$m4 = ['nim' => '107', 'nama' => 'Herlan the Thieft', 'nilai' => 80];
$m5 = ['nim' => '115', 'nama' => 'Lord David', 'nilai' => 64];
$m6 = ['nim' => '119', 'nama' => 'Agung Sadboy', 'nilai' => 75];
$m7 = ['nim' => '127', 'nama' => 'Chummaedi Propler', 'nilai' => 79];
$m8 = ['nim' => '128', 'nama' => 'Ratu Faradiba Al Kaf', 'nilai' => 97];
$m9 = ['nim' => '131', 'nama' => 'Satria Baja Ringan', 'nilai' => 30];
$m10 = ['nim' => '132', 'nama' => 'Ayannokouji Rizki', 'nilai' => 47];

$arr_judul = [
    '#', 'NIM', 'Nama', 'Nilai', 'Status',
    'Grade', 'Predikat'
];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//aggregate function in array
$total_m = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai);
$nilai_max = max($nilai);
$nilai_min = min($nilai);
$nilai_avg = $total_nilai / $total_m;

//keterangan
$keterangan = [
    'Nilai Max' => $nilai_max,
    'Nilai Min' => $nilai_min,
    'Nilai Average' => $nilai_avg,
    'Jumlah Siswa' => $total_m
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>andikaDwiyanto - Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    <h1 class="text-center text-dark mt-3"><strong>Daftar Mahasiswa</strong></h1>
    <h3 class="text-center text-dark mt-0 my-5">Tabel Kelulusan Mahasiswa 2022</h3>
    <div class="container col-lg-8 col-md-6">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <?php
                    foreach ($arr_judul as $jdl) {
                    ?>
                        <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    // Deklarasi Variable 2
                    $nilai_mhs = $mhs['nilai'];
                    // Ternary
                    $status = ($nilai_mhs >= 60) ?
                        '<p class="text-success"><b>Lulus</b></p>' :
                        '<p class="text-danger"><b>Tidak Lulus</b></p>';
                    // If-else untuk menentukan grade berdasarkan nilai mahasiswa
                    if ($nilai_mhs >= 85 && $nilai_mhs <= 100) {
                        $grade = 'A';
                    } elseif ($nilai_mhs >= 75 && $nilai_mhs <= 85) {
                        $grade = 'B';
                    } elseif ($nilai_mhs >= 65 && $nilai_mhs <= 75) {
                        $grade = 'C';
                    } elseif ($nilai_mhs >= 45 && $nilai_mhs <= 65) {
                        $grade = 'D';
                    } else {
                        $grade = 'E';
                    }
                    // Switch-case untuk menentukan predikat 
                    switch ($grade) {
                        case 'A':
                            $predikat = 'Memuaskan';
                            break;
                        case 'B':
                            $predikat = 'Luar Biasa';
                            break;
                        case 'C':
                            $predikat = 'Cukup';
                            break;
                        case 'D':
                            $predikat = 'Kurang';
                            break;
                        default:
                            $predikat = 'Buruk';
                            break;
                    }
                ?>
                    <!-- Output -->
                    <tr>
                        <td class="text-center"><?= $no ?>.</td>
                        <td class="text-center"><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['nama'] ?></td>
                        <td class="text-center"><?= $mhs['nilai'] ?></td>
                        <td class="text-center"><?= $status ?></td>
                        <td class="text-center"><?= $grade ?></td>
                        <td class="text-center"><?= $predikat ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
            <tfoot class="table-dark">
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                    <tr>
                        <th colspan="6"><?= $ket ?></th>
                        <th class="text-center"><?= $hasil ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
        <p class="text-center text-muted">@andikaDwiyanto, 2022. All rights reserved</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>