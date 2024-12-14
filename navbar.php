<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");

$sql= "SELECT gambarlogo FROM tblheader";
$hasil1= mysqli_query($sambung, $sql);
$row= mysqli_fetch_array($hasil1);

$logo= $row['gambarlogo'];
?>






<nav 
class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
            <img style="width:200px;height:60px;" class="navbar-brand" src="assets/img/<?php echo $logo;?>" alt="..." />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="servis.php">Service</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="testimoni.php">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>