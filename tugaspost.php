<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.city {
  background-color: tomato;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}
</style></head>
<body bgcolor="salmon">

    <center>
      <h3 style="font-family: 'Times New Roman', Times, serif;"> Form Permintaan Layanan Kapal</h3>
      <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/09/17/2555339328.png" width="250" height="176"></img>
    </center>
    <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>

      <hr>
    
      <form name="" action="post.php" method="post">
    <table>
      <tr>
        <td>  Nomor : FTL-PPNBr-TKPU- </td>
        <td> <input type = "text" name = "nomor"> </td>
    </tr>
    <tr>
        <td> 1. Nama Pemilik/Nahkoda = </td>
        <td> <input type = "text" name = "nama"> </td>
    </tr>
    <tr>
        <td> 2. Alamat = </td>
        <td> <input type = "text" name = "alamat"> </td>
    </tr>
    <tr>
        <td> 3. Nama Kapal = </td>
        <td> <input type = "text" name = "nakap"> </td>
    </tr>
    <tr>
        <td> 4. Tanda Selar = </td>
        <td> <input type = "text" name = "tasel"> </td>
    </tr>
    <tr>
      <td> 5. Ukuran Kapal  </td>
      <tr> 
          <td>a. Panjang Kapal= </b></td>
          <td> <input type = "text" name = "papal"> </td>
          <td> M </td>
      </tr>  
      <tr> 
        <td>b. Berat Kotor = </b></td>
        <td> <input type = "text" name = "betor"> </td>
        <td> GT/DWT </td>
    </tr>  
    <tr> 
      <td>c. Kekuatan Mesin = </b></td>
      <td> <input type = "text" name = "kesin"> </td>
      <td> PK/HP </td>
  </tr>  <br>
  <br>
  <tr>
    <td><i>Pemilik/Nahkoda</i></td>
    <td> <input type = "text" name = "pem"> </td>
    </tr>
    <br>
    <br>
    <td colspan="3"><input type="submit" value="simpan" name="tombol" ></td>
    <br>
    </table>
  </form>
<br><br>
<div class="city">
<h2>Permintaan Layanan Kapal</h2>
<p>Silahkan Isi Form dengan sebenar-benarnya, jika sudah cukup jangan lupa klik simpan</p>
</div>
<hr>


  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <span class="text-muted">© 2021 Company, Dinda Nurafni</span>
    </div>

  </footer>    
  </body>
  </html>