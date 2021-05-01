<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Covid</title>
</head>
<style>
    table {
        margin-left: auto;
        margin-right: auto;
    }

    table,
    th,
    td {
        border: 1px solid purple;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<body>
    <h2>FORM DATA COVID-19</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="wil" style="padding-right: 35px;">Nama Wilayah</label>
        <select id="wilayah" name="wilayah">
            <option value="DKI JAKARTA">DKI Jakarta</option>
            <option value="JAWA BARAT">Jawa Barat</option>
            <option value="BANTEN">Banten</option>
            <option value="JAWA TENGAH">Jawa Tengah</option>
        
        </select>
        <br>
        <label for="pos" style="padding-right: 35px;">Jumlah Positif    :</label>
        <input type="text" name="positif" size="15" style="margin-top: 20px;">
        <br>
        <label for="raw" style="padding-right: 35px;">Jumlah Dirawat    :</label>
        <input type="text" name="dirawat" size="15" style="margin-top: 20px;">
        <br>
        <label for="sem" style="padding-right: 35px;">Jumlah Sembuh     :</label>
        <input type="text" name="sembuh" size="15" style="margin-top: 20px;">
        <br>
        <label for="men" style="padding-right: 35px;">Jumlah Meninggal  :</label>
        <input type="text" name="meninggal" size="15" style="margin-top: 20px;">
        <br>
        <label for="ope" style="padding-right: 35px;">Nama Operator     :</label>
        <input type="text" name="operator" size="15" style="margin-top: 20px;">
        <br>
        <label for="nim" style="padding-right: 35px;">NIM Mahasiswa     :</label>
        <input type="text" name="nim" size="15" style="margin-top: 20px;">
        <br>
        <input type="submit" name="submit" value="Input"style="background-color: yellow; margin-top:30px; margin-left: 80px;">
    </form>
    <?php 
    $hariIni = new DateTime();
    if (isset($_POST['submit'])) {
        $wil = $_POST['wilayah'];
        $pstf = $_POST['positif'];
        $rwt = $_POST['dirawat'];
        $smbh = $_POST['sembuh'];
        $mnggl = $_POST['meninggal'];
        $mahasiswa = $_POST['operator'];
        $nim = $_POST['nim'];
    }
    ?>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <br>
    <br>
    <h1 style="text-align: center;">Data Pemantauan Covid-19 WILAYAH <?= $wil ?></h1>
    <h2 style="text-align: center;">Per <?= $hariIni->format('d F Y H:i:s') ?></h2>
    <h3 style="text-align: center;"><?= $mahasiswa ?> / <?= $nim ?></h3>

    <table style="width:100%">
        <tr>
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <tr>
            <td><?= $pstf ?></td>
            <td><?= $rwt ?></td>
            <td><?= $smbh ?></td>
            <td><?= $mnggl ?></td>
        </tr>
    </table>
</body>
</html>
