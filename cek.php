<?php
    $email = $_GET['email'];
    $notiket = $_GET['notiket'];

    //memuat halaman json
    $jsonData = file_get_contents("tiket.json");
    $ticketData = json_decode($jsonData, true);

    $eTicket = null;
    foreach ($ticketData as $ticket){
        if (($ticket['email'] === $email)&&($ticket['notiket'] === $notiket)){
            $eTicket = $ticket;
            break;
        }
    }

    if($eTicket){
        ?>
        <h1>Rincian E-Tiket</h1>
        <p>No.Tiket  : <?php echo $eTicket['notiket']; ?></p>
        <p>Email  : <?php echo $eTicket['email']; ?></p>
        <p>Nama : <?php echo $eTicket['name']; ?></p>

        <script>
            window.onload = function() {
                window.print();
            };
        </script>
        <?php
    } else {
        ?>
        <h1>No E-Tiket Ditemukan</h1>
        <p>Maaf, no e-tiket tidak ditemukan dengan email tersebut</p>
        <?php
    }
?>