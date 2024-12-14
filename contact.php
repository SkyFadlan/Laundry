<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");
$id = 4;
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
        <style>
    .responsive-map {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
  height: 0;
  overflow: hidden;
}

.responsive-map iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
</style>
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
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Isi formulir di bawah ini untuk mengirimkan pesan kepada kami dan kami akan menghubungi Anda sesegera mungkin!</p>
                        <div class="my-5">
                            
                            <form id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Nama Lengkap" required name="name" />
                                    <label for="name">Nama Lengkap</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Alamat Email" required name="email" />
                                    <label for="email">Alamat Email</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Nomor Telepon" required name="phone" />
                                    <label for="phone">Nomor Telepon</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" type="text" placeholder="Pesan" style="height: 10rem" required name="message"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" id="sendMessageButton" type="submit">Kirim</button>
                            </form>
                        </div>
                        <div class="responsive-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.589133864763!2d106.63990937316674!3d-6.185702160603253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f926476b474f%3A0x8b4eaba0d2175887!2sJl.%20Veteran%20I%203-1%2C%20RT.002%2FRW.004%2C%20Babakan%2C%20Kec.%20Tangerang%2C%20Kota%20Tangerang%2C%20Banten%2015118!5e0!3m2!1sid!2sid!4v1715389114420!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 100vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
                    </div>
                    Jl. Veteran I 3-1, RT.002/RW.004, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118
                </div>
            </div>
        </main>
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
