<?php
include "koneksi.php";

// Fungsi untuk menyimpan riwayat chat
function saveChat($nama, $email, $jumlah, $namaservis) {
    global $conn;

    // Simpan riwayat chat di tabel histori
    $sql = "INSERT INTO tblpesanan (nama, email, jumlah, namaservis) VALUES ('$nama', '$email', '$jumlah', '$namaservis')";

    if (mysqli_query($conn, $sql)) {
        return ['success' => true];
    } else {
        return ['success' => false, 'message' => mysqli_error($conn)];
    }
}

// Fungsi untuk mengirim pesan ke WhatsApp
function sendWhatsAppMessage($nama, $email, $jumlah, $namaservis) {
    $productName = urlencode($namaservis);
    $url = "https://api.whatsapp.com/send?phone=6285694659069&text=Halo%20Admin%0ASaya%20*" . urlencode($nama) . "%0AEmail%20" . urlencode($email) . "%0AJumlah%20" . urlencode($jumlah) . "%0AProduk%20" . $productName . "*";

    return $url;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        #contact {
            width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin: 50px auto;
        }
        #contact h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        #contact form {
            display: flex;
            flex-direction: column;
        }
        #contact form input,
        #contact form select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        #contact form button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        #contact form button:hover {
            background-color: #3e8e41;
        }

        button {
 display: flex;
 height: 3em;
 width: 100px;
 align-items: center;
 justify-content: center;
 background-color: #eeeeee4b;
 border-radius: 3px;
 letter-spacing: 1px;
 transition: all 0.2s linear;
 cursor: pointer;
 border: none;
 background: #fff;
}

button > svg {
 margin-right: 5px;
 margin-left: 5px;
 font-size: 20px;
 transition: all 0.4s ease-in;
}

button:hover > svg {
 font-size: 1.2em;
 transform: translateX(-5px);
}

button:hover {
 box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff;
 transform: translateY(-2px);
}
    </style>
</head>
<body>
<a href="servis.php">
<button>
  <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024"><path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path></svg>
  <span>Back</span>
</button></a>

    <div id="contact">
        <h2>Pesanan</h2>
        <form id="orderForm">
            <input type="text" id="nama" placeholder="Nama" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="jumlah" placeholder="Jumlah" required>
            <select id="id" required>
                <option value="">Pilih produk</option>
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tblservis";
                $hasil = mysqli_query($conn, $sql); 
                if (mysqli_num_rows($hasil) > 0) {
                    while($row = mysqli_fetch_assoc($hasil)) {
                        echo '<option value="' . $row["id"] . '" data-nama="' . $row["namaservis"] . '">' . $row["namaservis"] . '</option>';
                    }
                } else {
                    echo '<option value="">Tidak ada produk tersedia</option>';
                }
                ?>
            </select>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
    document.getElementById('orderForm').onsubmit = function(event) {
        event.preventDefault();
        sendMassage();
    };

    function sendMassage() {
        const nama = document.getElementById('nama').value;
        const email = document.getElementById('email').value;
        const jumlah = document.getElementById('jumlah').value;
        const productSelect = document.getElementById('id');
        const productName = productSelect.options[productSelect.selectedIndex].getAttribute('data-nama');

        fetch('save_chat.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nama: nama,
                email: email,
                jumlah: jumlah,
                namaservis: productName
            })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  const url = `https://api.whatsapp.com/send?phone=6285694659069&text=Halo%20Admin%0ASaya%20${encodeURIComponent(nama)}%0AEmail%20${encodeURIComponent(email)}%0AJumlah%20${encodeURIComponent(jumlah)}%0AProduk%20${encodeURIComponent(productName)}`;
                  console.log('WhatsApp URL:', url); // Debugging: log URL
                  window.open(url, '_blank');
              } else {
                  alert('Gagal menyimpan histori: ' + data.message);
              }
          }).catch(error => {
              console.error('Error:', error);
              alert('Terjadi kesalahan saat menyimpan histori.');
          });
    }
    </script>
</body>
</html>
