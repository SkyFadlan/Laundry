<?php
$sambung= mysqli_connect("localhost", "root", "", "dblaundry");
$id = 5;
$sql3= "SELECT judul, subjudul, gambar FROM tblheader WHERE id = $id";
$hasil3= mysqli_query($sambung, $sql3);
$row3= mysqli_fetch_array($hasil3);

$judul3= $row3['judul'];
$subjudul3= $row3['subjudul'];
$gambar3= $row3['gambar'];


$server = 'localhost';
$username = 'root';
$password = '';
$database = 'dbtestimoni';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tbltestimoni (username, message, created_at) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $username, $message, $created_at);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    $stmt->close();
}

$sql = "SELECT * FROM tbltestimoni ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);
$testimoni = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();

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
        body {
    background-color: #d8ecff;
    color: #000;
}

        #testimoni {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .testimoni-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 10px solid #ccc;
            border-radius: 5px;
        }

        .username {
            font-weight: bold;
        }

        .message {
            margin-top: 10px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        .form-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-button:hover {
            background-color: #45a049;
        }

.containere {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  flex: 1 0 200px;
  margin: 10px;
  background-color: rgba(243, 244, 246, 1);
  padding: 2rem;
  max-width: 320px;
  border-radius: 10px;
  box-shadow: 0 20px 30px -20px rgba(5, 5, 5, 0.24);
}

.header {
  display: flex;
  align-items: center;
  grid-gap: 1rem;
  gap: 1rem;
}

.header .image {
  height: 4rem;
  width: 4rem;
  border-radius: 9999px;
  object-fit: cover;
}

.stars {
  display: flex;
  justify-content: center;
  grid-gap: 0.125rem;
  gap: 0.125rem;
  color: rgba(34, 197, 94, 1);
}

.stars svg {
  height: 1rem;
  width: 1rem;
}

.name {
  margin-top: 0.25rem;
  font-size: 1.125rem;
  line-height: 1.75rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgba(55, 65, 81, 1);
}

.message {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  margin-top: 1rem;
  color: rgba(107, 114, 128, 1);
}

</style>
</head>
<body>
     <!-- Navigation-->
     <?php
        include "navbar.php"
        ?>
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

<!-- konten kartu pertama -->
        <div class="containere">
        <div class="card">
        <div class="header">
        <img src="testimoni1.jpg" alt="Gambar testimoni" class="image">
          <div>
            <div class="stars">
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
            </div>
            <p class="name">Yui Nakano</p>
          </div>
        </div>

        <p class="message">
        "Sebagai orang Jepang saya tidak menyangka ternyata kualitas layanannya luar biasa, cucian sangat bersih, sangat cocok dengan tema Jepang. 
        Pelayanan staf sangat ramah, suasana yang tenang sesuai dengan budaya Jepang, ini salah satu toko laundry favorit saya!"
        </p>
</div>
<!-- konten kartu kedua -->
<div class="card">
        <div class="header">
        <img src="testimoni2.jpg" alt="Gambar testimoni" class="image">
          <div>
            <div class="stars">
            <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
            </div>
            <p class="name">Firmansyah</p>
          </div>
        </div>

        <p class="message">
          "Nyesel si baru tau ada laundry yang semurah ini dan pakaian pun menjadi sangat bersih,
          coba saya tau pas zaman saya ngekos dulu udah langganan dari lama kayaknya,
          dan sekarang saya yang masi hidup sendiri langganan terus di laundry ini"
        </p>
</div>
<!-- konten kartu ketiga -->
<div class="card">
        <div class="header">
        <img src="testimoni3.jpg" alt="Gambar testimoni" class="image">
          <div>
            <div class="stars">
            <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
              <img fill="currentColor" viewBox="0 0 20 20" src="star.svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </img>
            </div>
            <p class="name">Nayla Nur Afifah</p>
          </div>
        </div>

        <p class="message">
        "Laundry khas Jepang ini sungguh luar biasa, sebagai orang yang pernah pergi ke Jepang saya sangat 
        suka dengan Pelayanan yang cepat dan wangi bunga sakura nya benar benar wangi sama seperti yang ada di Jepang.
        Layanan mereka sungguh memuaskan, saya sangat merekomendasikan untuk mencoba!"
        </p>
</div>

<div id="testimoni">
    <?php if (empty($testimoni)): ?>
        <p>Ulasan</p>
    <?php else: ?>
        <?php foreach ($testimoni as $t): ?>
            <div class="testimoni-item">
                <p class="username"><?= htmlspecialchars($t['username']) ?></p>
                <p class="message"><?= htmlspecialchars($t['message']) ?></p>
                <p class="created_at"><?= htmlspecialchars($t['created_at']) ?></p>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>


<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input class="form-input" type="text" name="username" placeholder="Username" required>
    <textarea class="form-input" name="message" placeholder="Testimoni" required></textarea>
    <button class="form-button" id="submit" type="submit">Kirim</button>
</form>

<script>
    const testimoniForm = document.querySelector('form');

    testimoniForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(testimoniForm);
        const xhr = new XMLHttpRequest();

        xhr.open(testimoniForm.method, testimoniForm.action);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = () => {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    alert('Testimoni berhasil dikirim!');
                    const testimoni = document.getElementById('testimoni');
                    const testimoniItem = document.createElement('div');
                    testimoniItem.classList.add('testimoni-item');
                    testimoniItem.innerHTML = `
                        <p class="username">${formData.get('username')}</p>
                        <p class="message">${formData.get('message')}</p>
                        <p class="created_at">${new Date().toISOString().slice(0, 19).replace('T', ' ')}</p>
                    `;
                    testimoni.insertBefore(testimoniItem, testimoni.firstChild);
                    testimoniForm.reset();
                    window.location.href = "testimoni.php";
                } else {
                    alert('Terjadi kesalahan saat mengirim testimoni.');
                }
            } else {
                alert('Terjadi kesalahan saat mengirim testimoni.');
            }
        };

        xhr.send(new URLSearchParams(formData).toString());
    });
</script>
<script src="js/scripts.js"></script>
</body>
</html>