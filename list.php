<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--My font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Fireworkza - List</title>
  </head>
  <body>

 <!-- Nav -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-light">
  <div class="container">
        <a class="navbar-brand" href="#"><span>Firework</span>ZA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/tugas-dkp/tugas_akhir/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jenis-firework">Kembang Api</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#koleksi-firework">Koleksi</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Nav -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container isi-jumbotron mt-5">
    <h1 class="display-4">Acara Meriah<br>Dengan  Fireworkza</h1>
    <p class="lead mt-5">Perusahaan kembang api pertama dan terbaik di Indonesia.<br>dibuat oleh mahasiswa teknik komputer undip</p>
    <a href="#" class="btn btn-danger">Pesan Sekarang</a>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- List Firework -->
<section id="jenis-firework" class="jenis-firework">
    <div class="container">
        <div class="row text-center">
            <?php  $kategori = $_GET['firework'];?>
            <div class="col-md-12">
                <h2><span style="text-transform:capitalize"><?=$kategori?></span></h2>
            </div>
        </div>
        <?php
            $firework = [
                ["Lily","Defense","Shot","Hammer","Chrys","Flashing"],
                ["American","Golden","Warrior","Roman","Dragon","Fire"],
                ["Whistling","Traveller","Rocket","Rocket 2","Rocket 3","Rocket 4"]
            ];
        ?>
        <div class="row mt-5">
        <?php if($kategori == 'cakes'):?>
            <?php for($i=1;$i<=6;$i++):?>
            <div class="col-lg-4 text-center">
                <div class="firework">
                    <a href="#">
                    <img src="<?="assets/img/firework/cakes/".$i?>.jpg" width="370" height="390"></a>
                    <span><?=$firework[0][$i-1]?></span>
                </div>
                <a href="<?='detail.php?firework='.$kategori."&jenis=".$i?>" class="btn btn-mydanger mt-4 mb-5">LIHAT DETAIL</a>
            </div>
            <?php endfor;?>
        <?php elseif($kategori == 'romancandles'):?>
            <?php for($i=1;$i<=6;$i++):?>
            <div class="col-lg-4 text-center">
                <div class="firework">
                    <a href="#">
                    <img src="<?="assets/img/firework/romancandles/".$i?>.jpg" width="370" height="390"></a>
                    <span><?=$firework[1][$i-1]?></span>
                </div>
                <a href="<?='detail.php?firework='.$kategori."&jenis=".$i?>" class="btn btn-mydanger mt-4 mb-5">LIHAT DETAIL</a>
            </div>
            <?php endfor;?>
        <?php else:?>
            <?php for($i=1;$i<=6;$i++):?>
            <div class="col-lg-4 text-center">
                <div class="firework">
                    <a href="#">
                    <img src="<?="assets/img/firework/rockets/".$i?>.jpg" width="370" height="390"></a>
                    <span><?=$firework[2][$i-1]?></span>
                </div>
                <a href="<?='detail.php?firework='.$kategori."&jenis=".$i?>" class="btn btn-mydanger mt-4 mb-5">LIHAT DETAIL</a>
            </div>
            <?php endfor;?>
        <?php endif;?>
        </div>
    </div>
</section>
<!-- List Firework -->

<!-- Tentang -->
<section id="tentang" class="tentang">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Tentang Pembuat</h2>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col-lg-12">
                <span>Fahreza Isnanto praktikum dkp tugas akhir universitas diponegoro.</span>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Tentang -->


<!-- Footer -->
<footer>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <p>&copy; Fahreza Isnanto Praktikum DKP Teknik Komputer 2020.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Akhir Footer -->

  
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
    
  </body>
</html>