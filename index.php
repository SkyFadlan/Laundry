<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");

$sql= "SELECT judul, subjudul, gambar FROM tblheader";
$hasil1= mysqli_query($sambung, $sql);
$row= mysqli_fetch_array($hasil1);

$judul1= $row['judul'];
$subjudul1= $row['subjudul'];
$gambar1= $row['gambar'];
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NihonClean</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <?php
        include "navbar.php"
        ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/<?php echo $gambar1;?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1><?php echo $judul1;?></h1>
                            <span class="subheading"><?php echo $subjudul1;?></span>
                       <br>
                        </div>
                    </div>
                </div> 
            </div>
        </header>
        
        <!-- Main Content-->
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                        <footer class="footer">
    <div class="container">
        <h3>Link Foto</h3>
        <ul class="pustaka">
            <li><a href="https://www.pexels.com/id-id/foto/kering-gersang-kemarau-cucian-10565603/">Background Header Home</a></li>
            <li><a href="https://pixabay.com/id/photos/salon-cuci-cucian-orang-mesin-cuci-567951/">Background Header About</a></li>
            <li><a href="https://pixabay.com/id/photos/cucian-untuk-mencuci-pembersihan-4017609/">Background Header Service</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/terima-kasih-signage-2072165/">Background Header Testimoni</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/fotografi-fokus-selektif-telepon-putar-hitam-163007/">Background Header Contact</a></li>
            <li><a href="https://www.shopify.com/stock-photos/photos/black-and-blue-clothing-on-a-rack-in-a-sunlit-shop?q=washing+clothes">Service Iki Iki Wash</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/pakaian-jeruk-putih-bunga-9899498/">Service Sakura Fresh Dry</a></li>
            <li><a href="https://www.shopify.com/stock-photos/photos/folded-laundry?q=laundry">Service Kintsugi Care</a></li>
            <li><a href="https://www.shopify.com/stock-photos/photos/hands-folding-clean-laundry?q=washing+cloats">Service Origami Press</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/tekstil-putih-hitam-dan-merah-1482177/">Service Sakura Soft Carpet Clean</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/cahaya-bangku-kering-tembok-4210376/">Service Silky Sheet Sanctuary</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/bantal-putih-di-tempat-tidur-3682240/">Service Moon Combo Package</a></li>
            <li><a href="https://pixabay.com/id/illustrations/ai-dihasilkan-wanita-muda-8622274/">Testimoni Yui Nakano</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/foto-pria-yang-mengendarai-sepeda-4054069/">Testimoni Firmansyah</a></li>
            <li><a href="https://www.pexels.com/id-id/foto/orang-wanita-perempuan-kaum-wanita-12430328/">Testimoni Nayla Nur Afifah</a></li>
            <!-- Tambahkan tautan sesuai kebutuhan -->
        </ul>
    </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
