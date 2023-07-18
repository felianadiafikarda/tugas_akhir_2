<?php
$email = $_POST['email'];
$name = $_POST['name'];
$noTelp = $_POST['noTelp'];
$alamat = $_POST['alamat'];
$noIdentitas = $_POST['noIdentitas'];

$file = 'tiket.json';
$jsonData = file_get_contents($file);
$existingData = json_decode($jsonData, true);

$jumlahData = count($existingData);

$nomortiket = 'PWEB - ' . ($jumlahData + 1);

$data = array(
  'notiket' => $nomortiket,
  'email' => $email,
  'name' => $name,
  'noTelp' => $noTelp,
  'alamat' => $alamat,
  'noIdentitas' => $noIdentitas
);

$existingData[] = $data;

$newData = json_encode($existingData, JSON_PRETTY_PRINT);

file_put_contents($file, $newData);

header("Location: output.php");
exit();
?>