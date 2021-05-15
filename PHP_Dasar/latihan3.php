<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Kondisi IF</h1>
<?php
 $nama_hari = ("Sunday");
     if ($nama_hari == "Sunday"){
         echo "Minggu";
         }    elseif($nama_hari == "Monday"){
         echo "senin";
         }     else {
          echo "selasa";
         }
?>         
</body>
</html>