<?php
// Pull Model Class
require_once "Round.php";
require_once "Triangle.php";
require_once "Square.php";
// Pull Array
include_once "arrayShape.php";

$no = 1;
$arr_scalar = [
    '#' ,'Nama Bidang', 'Keterangan (cm)', 'Luas Bidang (cm)', 'Keliling Bidang (cm)'
];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>andikaDwiyanto - Abstarct Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container-fluid p-5 text-dark">
        <h1 class="text-center mb-0">Shapes Table</h1>
        <p class="text-center">Menampilkan data dengan menggunakan <strong>Abstract Class</strong></p>
    </div>

    <div class="container-fluid col-lg-10">
        <table class="table table-bordered border-black table-dark table-hover">
            <thead class="text-center">
                <tr>
                    <!-- Array Scalar -->
                    <?php
                    foreach ($arr_scalar as $arr) {
                    ?>
                        <th><?= $arr ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Memanggil data-data Array
                foreach ($shapes as $shps) {
                ?>
                    
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $shps->namaBidang() ?></td>
                            <td><?= $shps->keterangan() ?></td>
                            <td class="text-center"><?= $shps->luasBidang() ?> cm</td>
                            <td class="text-center"><?= $shps->kelilingBidang() ?> cm</td>
                        </tr>
                    
                <?php } ?>
                
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5" class="text-center">Jumlah Data: <?= $no-1 ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="container-fluid p-5">
        <p class="text-center text-muted mt-2 small">@andikaDwiyanto, 2022. All rights reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>