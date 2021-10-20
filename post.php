<html>
<head>
    <title> Keterangan Anda </title>
</head>
<body bgcolor="salmon">
    <center>
       <h1> Berikut Data anda </h1>
</center>
<hr>
<h5> Berikut Inputan Anda </h5>
<br>
<?php

$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nakap = $_POST['nakap'];
$tasel = $_POST['tasel'];
$papal = $_POST['papal'];
$betor = $_POST['betor'];
$kesin = $_POST['kesin'];
$pem = $_POST['pem'];
$tombol = $_POST['tombol'];


echo "nomor : ".$nomor."<br>"; 
echo "nama : ".$nama."<br>"; 
echo "alamat : ".$alamat."<br>"; 
echo "nama kapal : ".$nakap."<br>";
echo "tanda selar : ".$tasel."<br>"; 
echo "Panjang Kapal : ".$papal."<br>"; 
echo "berat kotor : ".$betor."<br>"; 
echo "kekuatan mesin : ".$kesin."<br>"; 
echo "Pemilik/Nahkoda : ".$pem."<br>"; 
?>
<br>
<br>
<table border="1">
    <tr>
        <td colspan="2" align ="center"><b>
            Form anda</b>
</td>
</tr>

<tr>
    <td> Nomor : FTL-PPNBr-TKPU-   </td>
    <td> <?php echo $nomor; ?> </td>
</tr>
<tr>
    <td> Nama : </td>
    <td> <?php echo $nama; ?> </td>
</tr>
<tr>
    <td> alamat : </td>
    <td> <?php echo $alamat; ?> </td>
</tr>
<tr>
    <td> Nama Kapal : </td>
    <td> <?php echo $nakap; ?> </td>
</tr>
<tr>
    <td> Tanda Selar : </td>
    <td> <?php echo $tasel; ?> </td>
</tr>
<tr>
    <td> Panjang kapal : </td>
    <td> <?php echo $papal; ?> </td>
</tr>
<tr>
    <td> berat kotor : </td>
    <td> <?php echo $betor; ?> </td>
</tr>
<tr>
    <td> kekuatan mesin : </td>
    <td> <?php echo $kesin; ?> </td>
</tr>
<tr>
    <td> pemilik/nahkoda : </td>
    <td> <?php echo $pem; ?> </td>
</tr>
</table>
<br>
<a class="nav-link" href="tugaspost.php">back to home</a>
<br><br>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
tekan untuk melihat waktu</button>
<p id="demo"></p>
<br>
<hr>
<center>
<h1>Terima Kasih</h1>
<img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/09/17/2555339328.png" width="250" height="176"></img>
</center>
</body>
</html>