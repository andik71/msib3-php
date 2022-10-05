<?php

$id = $_GET['id'];

switch ($id) {
    case '1':
        $item =
            [
                'id' => 1,
                'title' => 'Tugas 2 PHP',
                'subtitle' => 'Form Data Pegawai',
                'd-title' => 'Tugas 2 PhP | Form Data Pegawai',
                'img' => 'assets/img/portfolio/tugas2php1.png',
                'img-2' => 'assets/img/portfolio/tugas2php2.png',
                'img-3' => 'assets/img/portfolio/tugas2php3.png',
                'a-img' => 'assets/img/portfolio/tugas2php1.png',
                'div' => 'filter-web',
                'category' => 'Pemrograman PHP',
                'client' => 'MSIB3 - PT. Nurul Fikri',
                'project-date' => '28 September 2022',
                'project-url' => 'https://github.com/andik71/msib3-php/tree/tugas2-php',
                'portofolio-title' => 'Form Data Pegawai',
                'portofolio-desc' => 'Ini adalah Tugas 2 PHP, membuat sebuah form dengan method POST dengan form builder bootstrap dari startbootstrap. Tampilkan populasi data di atas jika sudah diklik tombol simpan, dengan tambahan data: (menggunakan tabel dan untuk data angka gunakan fungsi number_format php) untuk yang bisa menggunkan modal bootstrap dipersilahkan'
            ];
        break;

    case '2':
        $item =
            [
                'id' => 2,
                'title' => 'Tugas 3 PHP',
                'subtitle' => 'Daftar Mahasiswa',
                'd-title' => 'Tugas 3 PhP | Daftar Mahasiswa',
                'img' => 'assets/img/portfolio/tugas3php1.png',
                'img-2' => 'assets/img/portfolio/tugas3php2.png',
                'img-3' => 'assets/img/portfolio/tugas3php3.png',
                'a-img' => 'assets/img/portfolio/tugas3php1.png',
                'div' => 'filter-web',
                'category' => 'Pemrograman PHP',
                'client' => 'MSIB3 - PT. Nurul Fikri',
                'project-date' => '30 September 2022',
                'project-url' => 'https://github.com/andik71/msib3-php/tree/tugas3-php',
                'portofolio-title' => 'Daftar Mahasiswa',
                'portofolio-desc' => 'Ini adalah Tugas 3 PHP, membuat daftar nilai mahasiswa dengan array associative serta array scalar'
            ];
        break;
    case '3':
        $item =
            [
                'id' => 3,
                'title' => 'Tugas 4 PHP',
                'subtitle' => 'Daftar Gaji Pegawai',
                'd-title' => 'Tugas 4 PhP | Daftar Gaji Pegawai',
                'img' => 'assets/img/portfolio/tugas4php1.png',
                'img-2' => 'assets/img/portfolio/tugas4php2.png',
                'img-3' => 'assets/img/portfolio/tugas4php3.png',
                'a-img' => 'assets/img/portfolio/tugas4php1.png',
                'div' => 'filter-web',
                'category' => 'Pemrograman PHP',
                'client' => 'MSIB3 - PT. Nurul Fikri',
                'project-date' => '2 October 2022',
                'project-url' => 'https://github.com/andik71/msib3-php/tree/tugas4-php',
                'portofolio-title' => 'Daftar Gaji Pegawai',
                'portofolio-desc' => 'Ini adalah Tugas 4 PHP, membuat Class Pegawai dengan Constructor dengan operator pada pertemuan sebelumnya'
            ];
        break;
    case '4':
        $item =
            [
                'id' => 4,
                'title' => 'Tugas 5 PHP',
                'subtitle' => 'Tabel Bangun 2 Dimensi',
                'd-title' => 'Tugas 5 PhP | Tabel Bangun 2 Dimensi',
                'img' => 'assets/img/portfolio/tugas5php1.png',
                'img-2' => 'assets/img/portfolio/tugas5php2.png',
                'img-3' => 'assets/img/portfolio/tugas5php3.png',
                'a-img' => 'assets/img/portfolio/tugas5php1.png',
                'div' => 'filter-web',
                'category' => 'Pemrograman PHP',
                'client' => 'MSIB3 - PT. Nurul Fikri',
                'project-date' => '3 October 2022',
                'project-url' => 'https://github.com/andik71/msib3-php/tree/tugas5-php',
                'portofolio-title' => 'Tabel Bangun 2 Dimensi',
                'portofolio-desc' => 'Ini adalah Tugas 5 PHP, membuat abstract class Bangun 2D'
            ];
        break;
    case '5':
        $item =
            [

            ];
        break;

    default:
        break;
}

?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=portofolio">Portofolio</a></li>
            <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="<?= $item['img'] ?>" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="<?= $item['img-2'] ?>" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="<?= $item['img-3'] ?>" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: <?= $item['category'] ?></li>
                        <li><strong>Client</strong>: <?= $item['client'] ?></li>
                        <li><strong>Project date</strong>: <?= $item['project-date'] ?></li>
                        <li><strong>Project URL</strong>: <a href="<?= $item['project-url'] ?>"><?= $item['project-url'] ?></a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2><?= $item['portofolio-title'] ?></h2>
                    <p>
                    <?= $item['portofolio-desc'] ?>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->