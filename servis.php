<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");

$sql= "SELECT id, namaservis, subjudul, gambar FROM tblservis";
$result= mysqli_query($sambung, $sql);
?>

<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");

$sql= "SELECT id, layanan, harga, keterangan FROM tblharga";
$result1= mysqli_query($sambung, $sql);
?>

<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");
$id = 3;
$sql3= "SELECT judul, subjudul, gambar FROM tblheader WHERE id = $id";
$hasil3= mysqli_query($sambung, $sql3);
$row3= mysqli_fetch_array($hasil3);

$judul3= $row3['judul'];
$subjudul3= $row3['subjudul'];
$gambar3= $row3['gambar'];
?>


<style>
    .container {
  display: flex;
  flex-wrap: wrap;
}

.column {
  flex: 1;
  padding: 10px;
  border: 1px solid #ccc;
  margin: 10px;
  width: 30%;
}

.shadow {
 box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(190, 190, 190),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}



button {
 align-items: center;
 background-color: rgb(120, 120, 120); /* Warna abu */
 border: 0;
 border-radius: 8px;
 box-shadow: rgba(0, 128, 0, 0.2) 0 15px 30px -5px;
 box-sizing: border-box;
 color: #FFFFFF;
 display: flex;
 font-family: Phantomsans, sans-serif;
 font-size: 18px;
 justify-content: center;
 line-height: 1em;
 max-width: 100%;
 min-width: 140px;
 padding: 3px;
 text-decoration: none;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 white-space: nowrap;
 cursor: pointer;
 transition: all .3s;
}

button:active,
button:hover {
 outline: 0;
}

button span {
 background-color: rgb(90, 90, 90);
 padding: 16px 24px;
 border-radius: 6px;
 width: 100%;
 height: 100%;
 transition: 300ms;
}

button:hover span {
 background: none;
}

button:active {
 transform: scale(0.9);
}

.produk-gambar {
    width: 300px;
    height: 300px;
    object-fit: cover;
}
</style>






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
        </header>
        <!-- Post Content-->
        <div class="container">
        <div class="row">
            <?php
             while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="column">
                <!-- Produk item 1-->
                <div class="card shadow">
                    <center>
                    <img class="produk-gambar" width="300" style="border-radius:15px" src="../adminlaundry/<?php echo $row["gambar"];?>" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["namaservis"];?></h5>
                        <p class="card-text"><?php echo $row["subjudul"];?></p>
                        <a href="kirimpesan.php">
                        <button>
                        <span class="text">Jadi Pengen</span></button></a>
                    </div>
             </div>
            </div>

            <?php
             }
            ?>

        </div>

        <h4 class="my-3">Harga</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Layanan</th>
      <th>Harga</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php
             while($row = mysqli_fetch_assoc($result1)) {
            ?>
    <tr>
      <td><?php echo $row["layanan"];?></td>
      <td><?php echo $row["harga"];?></td>
      <td><?php echo $row["keterangan"];?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<p class="text-muted">
  Catatan:<br>
  Layanan cuci dan kering:<br>
  1. Harga dapat berubah sesuai dengan kondisi khusus dan permintaan pelanggan.<br>
  2. Diskon hanya berlaku untuk layanan cuci dan kering.<br><br>
  Layanan Selimut:<br>
  1. Harga dapat bervariasi tergantung pada ukuran, ketebalan, dan jenis selimut.<br>
  2. Harga termasuk pencucian dan pengeringan selimut untuk memastikan kebersihan dan kenyamanan yang maksimal.<br><br>
  Layanan kasur dan karpet:<br>
  1. Harga dapat bervariasi tergantung pada ukuran, jenis, dan kondisi karpet atau kasur.<br>
  2. Untuk kasur, harga termasuk pencucian dan pengeringan kasur untuk memastikan kebersihan dan kenyamanan yang maksimal.
</p>

            </center>


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