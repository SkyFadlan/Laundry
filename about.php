<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");

$sql2= "SELECT judul, visi, misi FROM tblprofil";
$hasil2= mysqli_query($sambung, $sql2);
$row1= mysqli_fetch_array($hasil2);

$judul2= $row1['judul'];
$visi= $row1['visi'];
$misi= $row1['misi'];
?>

<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");
$id = 2;
$sql3= "SELECT judul, subjudul, gambar FROM tblheader WHERE id = $id";
$hasil3= mysqli_query($sambung, $sql3);
$row3= mysqli_fetch_array($hasil3);

$judul3= $row3['judul'];
$subjudul3= $row3['subjudul'];
$gambar3= $row3['gambar'];
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
        <header class="masthead" style="background-image: url('assets/img/<?php echo $gambar3;?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $judul3;?></h1>
                            <span class="subheading"><?php echo $subjudul3;?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-">
                    <h2 class="section-heading text-uppercase">Profil</h2>
                    <p class="section-subheading text-muted"><?php echo $judul2?></p>
                </div>
                <div class="row text-">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visi</h4>
                        <p class="text-muted"><?php echo $visi?></p>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"></h4>
                        <p class="text-muted"></p>
                    </div>
                    
                    
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        
                        </span>
                        <h4 class="my-3">Misi</h4>
                        <p class="text-muted">1.Menyediakan layanan laundry berkualitas tinggi dengan kelembutan ala Jepang.<br>
2.Mengintegrasikan seni dan keahlian tradisional dalam perawatan pakaian.<br>
3.Memberikan pengalaman pelanggan yang eksklusif dan memuaskan.<br>
4.Menjaga kebersihan dan ketertiban toko sesuai dengan prinsip "kaizen" Jepang.<br>
5.Terus mengikuti perkembangan teknologi laundry terbaru</p>
                    
                </div>

                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3"></h4>
                        <p class="text-muted"></p>
                    </div>
                    
                    
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        
                        </span>
                </div>
            </div>
        </section>
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
