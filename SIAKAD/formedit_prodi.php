
<!DOCTYPE html>
<html>
<head>
  <title>SIAKAD</title>
  <link rel="icon" type="image/x-icon" href="book.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 10px;
    }
    .header {
      background-color: lemonchiffon;
      padding: 30px;
      text-align: center;
    }
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .leftcolumn {
      float: center;
      width: 100%; /* Presisi 100% untuk membuat kolom lebar sepanjang layar */
      height: 800px;
    }
    .card {
      background-color: #f1f1f1; /* Warna latar belakang pertama */
      padding: 20px;
      margin-top: 20px;
      height: 100%; /* Sesuaikan tinggi dengan parent */
    }
    input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

 input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.footer {
    background-color: rgb(0, 0, 0);
    padding: 50px;
    text-align: center;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #f1f1f1;
}
  </style>
</head>
<body>
<a href="INDEX.html"><button class="dropbtn">DASHBOARD</button></a>
    <div class="dropdown">
      <button class="dropbtn">DATA MASTER</button>
      <div class="dropdown-content">
      <a href="">MAHASISWA</a>
      <a href="#">DOSEN</a>
      <a href="#">MATKUL</a>
      </div>
    </div>
    <button class="dropbtn">KRS</button>
    <button class="dropbtn">LAPORAN</button>
  </div>
  <div class="header">
    <font face="verdana" size="5" color="blue">
      <b>SIAKAD <br>SISTEM INFORMASI AKADEMIK</b>
    </font>
  </div>
  <div class="topnav">
    <a href="tampil_prodi.php">LIHAT DATA</a>
    <a href="input_prodi.php">INPUT PRODI</a>
  </div>
  <div class="leftcolumn">
    <div class="card">
        <div>
            <h2>UBAH DATA</h2>
            <?php
    include 'koneksi.php';
    $idEdit = $_GET['idprodi'];
    $dataEdit = mysqli_query($kon, "select * from prodi where idProdi= '$idEdit'");
    while($tampil = mysqli_fetch_array($dataEdit)){
?>
      <form action="editprodi.php" method="post" name="inputMhs">
        <table border="0">
        <tr><td width ="200">Id prodi </td>
        <td><input type="text" name="idProdi" value="<?php echo $tampil['idProdi']?>"readonly></td>
        </tr>
          
        <tr><td>Nama Prodi</td>
          <td><input type="text" name="namaProdi" value="<?php echo $tampil['namaProdi']?>"></td>
          </tr>
         
          <tr><td>Alamat prodi</td>
          <td><input type="text" name="alamatProdi" value="<?php echo $tampil['alamatProdi']?>"></td>

          <tr><td>Telepon</td>
          <td><input type="text" name="noTelp" value="<?php echo $tampil['noTelp']?>"></td>

          <tr><td>Tanggal Lahir</td>
          <td><input type="text" name="noTelp" value="<?php echo $tampil['noTelp']?>"></td>

          <tr><td>Id Dosen</td>
          <td><input type="text" name="idDosen" value="<?php echo $tampil['idDosen']?>"></td>

          </tr>
            <?php } ?>
          <tr align="center"><td colspan="2"><input type="submit" value="submit" value="SIMPAN" name="input"></td>
          </tr>
        </table>
       </form>
  </div>
  <div class="footer">
  </div>

</body>
</html>