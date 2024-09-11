<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

     <!-- Start Header -->
<a name="atas">
    <img src="awan 1.jpeg" width="100%">
    <!-- End Header -->
    <center>
    <h1>Dinus Student Blog</h1>
    <hr>
    <a href="index.php">Home</a> | 
    <a href="index.php?page=profile">Profil</a> |
    <a href="index.php?page=artikel">Artikel</a> |
    <a href="index.php?page=buku_tamu">Buku Tamu</a>
    <hr>
    </center>
    <?php
if (isset($_GET['page'])) {
  include($_GET['page'] . ".php");
} else {
?>
  <div class="row">
    <div class="column">
       <!-- isi beranda -->
    </div>
  </div>
<?php
}
?>
</head>
<body background-color="black">
    <h1>Selamat Datang di Blog Megan!!</h1>
    <p align="center">
        <img src="profile1.jpg" width="500x">
    </p>
    <br>
    <br>
        Hai, Saya Megan Febriana Putri Johana salah satu mahasiswa yang menempuh jenjang S-1 di Universitas Dia Nuswantoro, Fakultas Ilmu Komputer, 
        Prodi Teknik Informatika S-1. Saya sudah belajar pemograman saat di MAN Kendal. Pada saat itu kelas saya sering melakukan project dengan Arduino.
        <br>
        </br>
        Mengapa saya tertarik dengan pemrograman? Sebenarnya diawal saya tertarik bagaimana cara pembuatan web 
        site sehingga jadi semenarik itu inilah yang menjadi awal motivasi saya belajar pemrograman. Setelah Ujian 
        Sekolah dan lulus dari MAN Kendal saya menghabiskan masa libur sekolah disamping mempersiapkan UTBK dan Tes SKD saya juga menghabiskan waktu 
        dengan memperlajari bahasa pemrograman yang dasar seperti HTML dan CSS melalui chanel DeaAfriza dan UNPAS.
        Saya di kampus juga sudah mengikuti beberapa botcamp seperti BTNG mengambil Devisi Web dimana belajar HTML, CSS, dan Boostrap. 
        Sementara di Devisi Data Analis belajar bagaimana cleaning data dan memvisualisasikan data menggunakan Google Collabs dan bahasa pemrograman phython.
        Kemudian juga dicodingXIndosat disana saya mengambil Data Science hampi mirip seperti dengan yang saya pelajari di Data Analisis, namun disini saya belajar 
        banyak tentang Tipe Data dan lebih mendalam lagi dalam pengolahan data.
    </p>
</body>
</html>