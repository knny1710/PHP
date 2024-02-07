<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
    <h1>Belajar Tipe Data</h1>
    <h2>Integer</h2>  
     <div class="identitas-box" id="identitas">
        <div class="identitas">
          <ul>
            <li>
              <span>Nama:</span>
              <p><span>Sandi Ramadhan</span></p>
            </li>
            <li>
              <span>Kelas:</span>
              <p><span>XI RPL</span></p>
            </li>
          </ul>
        </div>
      </div>
      ! IdentitasBox End -->

<?php
# inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
var_dump($e);
?>
    </div>
</body>
</html>