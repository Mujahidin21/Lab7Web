<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php 
        echo "Hello Word";
     ?>

    <h1>Menggunakan Variabel</h1>

    <?php
    $nim = "311910283";
    $nama = "Mujahidin Fajar A";
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
<h1>Variabel</h1>
<?php echo 'Selamat Datang ' . $_GET['nama']; ?>

<h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>    
    <?php
    echo "Selamat Datang " . $_POST["nama"];
    ?>

    <?php
     $gaji = 1000000;
     $pajak = 0.1;
     $thp = $gaji - ($gaji*$pajak);
     echo "Gaji sebelum pajak = Rp. $gaji<br>";
     echo "Gaji yang dibawa pulang = Rp. $thp";
     ?>
<h1>Kondisi IF</h1>
<?php
 $nama_hari = ("Monday");
     if ($nama_hari == "Sunday"){
         echo "Minggu";
         }    elseif($nama_hari == "Monday"){
         echo "senin";
         }     else {
          echo "selasa";
         }
?>         
  <h1>Kondisi Switch</h1>
    <?php
     $nama_hari = date("1");
     switch ($nama_hari){
         case "1":
            echo "Sabtu";
            break;
            case "2":
                echo "Senin";
                break;
            case "3":
                echo "Selasa";
                break;
            default:
            echo "Minggu";
     }
    ?>
     <h1>Pengulangan For</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }

    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
   ?> 
     <h1>Pengulangan while</h1>
    <?php 
    echo "Perualangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
     <h1>Perulangan dowhile</h1>
   <?php
   echo "perulangan 1 sampai 10 <br />";
   $i=1;
   do {
       echo "perulangan ke: " . $i . '<br />';
       $i++;
   } while ($i<=100);
   ?>
</body>
</html>