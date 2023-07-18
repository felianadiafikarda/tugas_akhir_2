<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Konser</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Terimakasih telah melakukan registrasi e-tiket </h1>
            <hr>

            <p><marquee>Berikut adalah rincian informasi yang telah Anda masukkan:</marquee></p>
            <?php
            $file = 'tiket.json';
            $jsonData = file_get_contents($file);
            $existingData = json_decode($jsonData, true);
          
            // Mendapatkan data tiket terbaru
            $latestTicket = end($existingData);
          
            echo '  <div>';
            echo '<p>Nomor Tiket: ' . $latestTicket['notiket'] . '</p>';
            echo '<p>Email: ' . $latestTicket['email'] . '</p>';
            echo '<p>Nama: ' . $latestTicket['name'] . '</p>';
            echo '<p>No. Telepon: ' . $latestTicket['noTelp'] . '</p>';
            echo '<p>Alamat: ' . $latestTicket['alamat'] . '</p>';
            echo '<p>No. Identitas: ' . $latestTicket['noIdentitas'] . '</p>';
            echo '  </div>';
            ?>

            <!-- <div class="batal">
                <button onclick="validasiCetak()"
                    style="background-color: #bc8f8f; border-color: #bc8f8f; width: 252px; color: beige;font-size: 16px;cursor: pointer;margin-top: 0px;margin-left: 0px;border-radius: 5px;">Print</button>
            </div> -->
            <form  action="index.html">
            <div class="batal">
                <button onclick="returnToIndex()"
                    style="background-color: #bc8f8f; border-color: #bc8f8f; width: 252px; color: beige;font-size: 16px;cursor: pointer;margin-top: 0px;margin-left: 0px;border-radius: 5px;">Kembali</button>
            </div>
            </form>
        </div>
        <div class="right">
            <img src="tiket.png" alt="">
        </div>

</body>

</html>