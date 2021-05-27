<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--My font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Fireworkza - Detail</title>
  </head>
  <body>

    <!-- Masukkan session jika ada input keranjang -->

    <?php
    if(isset($_POST['kategoriKeranjang'])){
        if(!isset($_SESSION['keranjang'])){
            $_SESSION['keranjang'] = [["kategori"=>$_POST['kategoriKeranjang'],"jenis"=>$_POST['jenisKeranjang']]];
        }else{
            array_push($_SESSION['keranjang'],["kategori"=>$_POST['kategoriKeranjang'],"jenis"=>$_POST['jenisKeranjang']]);
        }
    }    
    ?>

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
                <a class="nav-link" href="wishlist.php">Keranjang</a>
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

<?php
  

    // Modul 5 = class constructor
    class Firework{
        private $kategori;
        private $jenis;
        private $no_gambar;
        private $list_jenis;
        private $umur;
        private $rate;
        private $hargaAll;
        private $harga;
        private $jarak;

        public function __construct($kategori,$jenis){
            $this->kategori = $kategori;
            $this->list_jenis = [ 
                "cakes" =>["Lily","Defense","Shot","Hammer","Chrys","Flashing"],
                "romancandles"=>["American","Golden","Warrior","Roman","Dragon","Fire"],
                "rockets"=>["Whistling","Traveller","Rocket","Rocket 2","Rocket 3","Rocket 4"]
            ];
            $this->hargaAll = [ 
                "cakes" =>[300000,320000,340000,360000,380000,400000],
                "romancandles"=>[200000,220000,240000,260000,280000,300000],
                "rockets"=>[100000,120000,140000,160000,180000,200000]
            ];
            $this->jenis = $this->list_jenis[$kategori][$jenis-1];
            $this->harga=$this->hargaAll[$kategori][$jenis-1];
            $this->no_gambar = $jenis;
        }

        //Modul 6 = Method Setter and Getter 
        public function set_umur($umur){ 
            $this->umur=$umur;
        }

        public function set_rate($rate){ 
            $this->rate=$rate;
        }

        public function set_jarak($jarak){ 
            $this->jarak=$jarak;
        }

        public function get_kategori(){
            return $this->kategori;
        }

        public function get_jenis(){
            return $this->jenis;
        }

        public function get_no_gambar(){
            return $this->no_gambar;
        }

        public function get_umur(){ 
            return $this->umur;
        }

        public function get_rate(){ 
            return $this->rate;
        }

        public function get_harga(){ 
            return $this->harga;
        }

        public function get_jarak(){ 
            return $this->jarak;
        }
    }
?>

<!-- detail-firework -->
<section id="detail-firework" class="detail-firework">
    <div class="container">
        <div class="row">
            <?php  
                $kategori = $_GET['firework']; //Modul 1 Tipe data variabel Array
                $jenis = $_GET['jenis'];
                $firework = new Firework($kategori,$jenis);  
                $firework->set_umur("18+");
                $firework->set_jarak("152 m"); 
                //Modul 2 = Pengkondisian 
                if($kategori=='cakes'){
                    $firework->set_rate("9/10"); 
                }elseif ($kategori=='romancandles') {
                    $firework->set_rate("8.7/10");
                }else{
                    $firework->set_rate("8.5/10"); 
                }
            ?>
            
            <div class="col-lg-6">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                    <img src="<?='assets/img/firework/'.$firework->get_kategori().'/'.$firework->get_no_gambar().'.jpg'?>" width="580" height="523" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                    <img src="<?='assets/img/others.jpg'?>" width="580" height="523" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="deskripsi-firework">
                <div class="judul-deskripsi-firework">
                    
                    <h2><?=$firework->get_kategori()." ".$firework->get_jenis()." (".rupiah($firework->get_harga()).") "?></h2>
                </div>
                <div class="teks-deskripsi-firework">
                    <form method="POST">
                    <input type="hidden" value="<?=$kategori?>" name="kategoriKeranjang">
                    <input type="hidden" value="<?=$jenis?>" name="jenisKeranjang">
                    <?php
                     $keranjangDipilih = false;
                    if(isset($_SESSION['keranjang'])){
                     foreach($_SESSION['keranjang'] as $key=>$value){
                         if($value["kategori"]==$kategori && $value["jenis"]==$jenis){
                             $keranjangDipilih = true;
                         }
                     }
                    }
                    ?>
                    <?php if(!$keranjangDipilih):?>
                    <button type="submit" class="btn btn-mydanger mt-4 mb-5"><i class="fa fa-heart"></i> Keranjang</button>
                    <?php else:?>
                    <a href="#" class="btn btn-mydanger mt-4 mb-5 btn-di-keranjang" >DiKeranjang</a>
                    <?php endif;?>
                    </form>
                    <p class="teks-normal">Kembang api yang memiliki sumbu ekstra cepat bakar dan ledakan yang menghebohkan, cocok untuk kegiatan bersama keluarga serta acara-acara besar.</p>
                    <p class="sized-box">&nbsp;</p>
                    <p class="teks-normal-below">Kembang api ini cocok digunakan pada pesta dan kegiatan besar yang dilaksanakan dengan tujuan memberikan kepuasan bagi para pelihat kembang api.</p>
                    <p class="sized-box">&nbsp;</p>
                    <ul class="list-deskripsi-firework">
                        <li class="item-list-deskripsi teks-normal-below"> Umur: <?=$firework->get_umur()?></li>
                        <li class="item-list-deskripsi teks-normal-below"> Rate: <?=$firework->get_rate()?></li>
                        <li class="item-list-deskripsi teks-normal-below"> Harga: <?=rupiah($firework->get_harga())?></li>
                        <li class="item-list-deskripsi teks-normal-below"> Jarak Aman: <?=$firework->get_jarak()?></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir detail-firework -->


<!-- Pemesanan -->
<section id="pemesanan" class="pemesanan">
    <div class="container">
        <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 mt-5">
            <!-- Modul 8 =Program Utama GUI -->
        <form method="post">
            <div class="form-group">
                <label for="namaLengkap"><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" id="namaLengkap" name="nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Email</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">Masukkan email pada field di atas.</small>
            </div>
            <!-- Modul 4 Function and method -->
            <div class="form-group">
                <label for="nomorTelepon"><b>No Telepon</b></label>
                <input type="text" class="form-control" id="nomorTelepon" name="no_telp" onkeypress="return isNumberKey(event)">
            </div>
            <div class="form-group">
                <label for="tanggalPengambilan"><b>Tanggal Pengambilan</b></label>
                <input type="date" class="form-control" id="tanggalPengambilan" name="tgl_pengambilan">
            </div>
            <div class="form-group">
                <label for="hargaBarang"><b>Harga per pcs</b></label>
                <input type="text" class="form-control" id="hargaBarang" name="harga_barang" value="<?=rupiah($firework->get_harga())?>" readonly>
            </div>
            <div class="form-group">
                <label for="jumlahBarang"><b>Jumlah Pembelian</b></label>
                <input type="text" class="form-control" id="jumlahBarang" name="jumlah_barang">
            </div>
            <button type="submit" class="btn btn-mydanger mt-4 mb-5" name="pesan-sekarang">PESAN SEKARANG</button>
            </form>
        </div>
        </div>
    </div>
</section>
<!-- Akhir Pemesanan -->

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

<!-- Modal Pemesanan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" name="nama" value="<?= (isset($_POST['nama']))? $_POST['nama']:"";?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= (isset($_POST['email']))? $_POST['email']:"";?>" readonly>
                <small id="emailHelp" class="form-text text-muted">Pastikan email sudah benar.</small>
            </div>
            <div class="form-group">
                <label for="nomorTelepon">No Telepon</label>
                <input type="text" class="form-control" id="nomorTelepon" name="no_telp" value="<?= (isset($_POST['no_telp']))? $_POST['no_telp']:"";?>" readonly>
            </div>
            <div class="form-group">
                <label for="tanggalPengambilan">Tanggal Pengambilan</label>
                <input type="date" class="form-control" id="tanggalPengambilan" name="tgl_pengambilan" value="<?= (isset($_POST['tgl_pengambilan']))? $_POST['tgl_pengambilan']:"";?>" readonly>
            </div>
            <div class="form-group">
                <label for="hargaBarang">Harga per pcs</label>
                <input type="text" class="form-control" id="hargaBarang" name="harga_barang" value="<?=$firework->get_harga()?>" readonly>
            </div>
            <div class="form-group">
                <label for="jumlahBarang">Jumlah Pembelian</label>
                <input type="text" class="form-control" id="jumlahBarang" name="jumlah_barang" value="<?= (isset($_POST['jumlah_barang']))? $_POST['jumlah_barang']:"";?>" readonly>
            </div>
            <?php
                $totalHarga = hitung_harga($firework->get_harga(),$_POST['jumlah_barang']);
        
                function hitung_harga($harga,$jumlah){
                    $hasil = $harga * $jumlah;
                    return rupiah($hasil);
                }

                function rupiah($angka){
	
                    $hasil_rupiah = "Rp" . number_format($angka,2,',','.');
                    return $hasil_rupiah;
                 
                }

            ?>
            <div class="form-group">
                <label for="jumlahBarang">Total Harga</label>
                <input type="text" class="form-control" id="jumlahBarang" name="jumlah_barang" value="<?=$totalHarga?>" readonly>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" id="review-benar" class="btn btn-primary">Benar</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Pemesanan -->

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Sweetalert -->
    <script src="assets/js/sweetalert2.all.min.js""></script>


    <?php if(isset($_POST['nama'])):?>
        <script>
            $('#exampleModal').modal('toggle');
            $('#review-benar').on('click',function(){
                $('#exampleModal').modal('toggle');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil.',
                    text: 'Pemesanan berhasil disimpan.',
                    background:"#fff url('assets/img/swal.png')",
                    });
            });
        </script> 
    <?php endif;?>
    <script>

    $('.btn-di-keranjang').on('click',function(e){
        Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan.',
                    text: 'Barang sudah di keranjang.',
                    background:"#fff url('assets/img/swal.png')",
                    });
        e.preventDefault();
    });

          function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
    </script>
  </body>
</html>