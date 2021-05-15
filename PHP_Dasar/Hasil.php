<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
<h1>Hasil Output</h2>
    <table>
        <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php
        echo $_POST["nama"]   
        ?></td>
        </tr>
        <tr>
        <td>Usia</td>
        <td>:</td>
        <td>
        <?php
        $tanggal_lahir = new DateTime($_POST["tglLahir"]);
         $sekarang = new DateTime("today");
         if($tanggal_lahir > $sekarang) {
             $thn = "0";
             $bln = "0";
             $tgl = "0";
         } 
         $thn = $sekarang ->diff($tanggal_lahir)->y;
         $bln = $sekarang ->diff($tanggal_lahir)->m;
         $tgl = $sekarang ->diff($tanggal_lahir)->d;
         echo $thn. "tahun " .$bln. "bulan".$tgl. "hari";
        ?></td>
         </tr>
         <tr>
         <td>Pekerjaan</td>
         <td>:</td>
         <td>
         <?php echo $_POST["pekerjaan"]?>
         </td>
         </tr>
         <tr>
         <td>Gaji</td>
         <td>:</td>
         <td>
         <?php 
         $pekerjaan = $_POST["pekerjaan"];
         if ($pekerjaan == "Operator"){
             echo " Rp5.000.000/Bulan";
         }elseif ($pekerjaan == "Office Boy"){
            echo "Rp 3.000.000/Bulan";
         }else if($pekerjaan == "Satpam"){
             echo "Rp 4.500.000/Bulan";
         }elseif($pekerjaan == "Manager"){
             echo "Rp 20.000.000/Bulan"; 
         }else {
             echo "5.000.000/Bulan";
         }
         ?>
</body>
</html>