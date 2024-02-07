<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sandi</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
    <div class="container">
    <h1>Belajar Tipe Data</h1>
    <h2>Float</h2>

   <!-- ! Identitas
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

    $nilaiMatematika = 9.8;
    $nilaiIPA = 8.9;
    $nilaiBahasaIndonesia = 9.3;

    # hitung nilai rata-rata
    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    # Tampilkan data

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    # lihat tipe data dari variabel $rataRata
    var_dump($rataRata);
    ?>
    </div>
</body>
</html>