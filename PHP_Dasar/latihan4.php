<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Kondisi Switch</h1>
    <?php
     $nama_hari = date("2");
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
</body>
</html>