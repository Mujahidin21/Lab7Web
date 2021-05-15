<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Form Input</h1>
    <form method="POST" action="hasil.php">
    <table rules="rows">
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" placeholder="Masukan Nama.."></td>
    </tr>
    <tr>
    <td>Tanggal lahir</td>
    <td><input type="date" name="tglLahir" placeholder="Masukan Tanggal.."></td>
    </tr>
    <tr>
    <td>Pekerjaan</td>
    <td><select name="pekerjaan" id="">
        <option value="">--pilih--</option>
        <option value=" Operator"> Operator Rp5000.000/Bulan</option>
        <option value="Office Boy">RpOffice Boy Rp3000.000/Bulan</option>
        <option value="Satpam">Satpam Rp4.500.000/Bulan</option>
        <option value="Manager">Manager 20.000.000/Bulan</option>
        </select></td>
    </tr>
    <tr>
    <td><button type="submit" name="submit" value="submit">Kirim</Button></td>
    </table>
    </form>
</body>
</html>