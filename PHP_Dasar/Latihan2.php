<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
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
     <?php
    # $nama_hari = ("Sunday");
    # if ($nama_hari == "Sunday"){
    #      }     echo "Minggu";
   # elseif($nama_hari == "Monday"){
   #    }        echo "senin";
   #  else {
    #     echo "selasa";
   #  }
     ?>
     <?php
     #$nama_hari = date("1");
    # switch ($nama_hari){
        # case "sunday":
          #  echo "Minggu";
          #  break;
          #  case "Monday":
           #     echo "Senin";
          #      break;
         #   case "Thusday":
        #        echo "Selasa";
        #        break;
       #     default:
      #          echo "Sabtu";
     #       }  
    ?>
    <?php
    #echo "Perulangan 1 sampai 10 <br />";
    #for ($i=1; $i<=10; $i++) {
        #echo "perulangan ke: " . $i . '<br> />';
    

    #echo "Perulangan Menurun dari 10 ke 1 <br />";
    #for ($i=10; $i>=1; $i--){
        #echo "perilangan ke: " . $i . '<br />';
        #$i++;
    
    ?>
</body>
</html>