<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Username Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('data.gif'); /* Ganti 'gambar.jpg' dengan URL atau path ke gambar yang Anda inginkan */
      background-size: cover; /* Menyesuaikan gambar agar memenuhi seluruh latar belakang */
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: rgba(255, 255, 255, 0.7); /* Menambahkan lapisan transparan pada latar belakang agar teks lebih mudah terbaca */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-buttons {
      position: absolute;
      top: 20px;
      left: 20px;
    }

    .action-buttons a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .action-buttons a:hover {
      background-color: #0056b3;
    }

    .form-container {
      max-width: 80%;
      margin: 0 auto;
      margin-top: 30px; /* Pindahkan form ke bawah */
    }

    /* Penyesuaian penataan teks pada kolom tabel */
    th:nth-child(1),
    td:nth-child(1) {
      text-align: center; /* Sejajarkan ID Buku */
    }

    th:nth-child(2),
    td:nth-child(2) {
      text-align: center; /* Sejajarkan Nama Buku */
    }

    th:nth-child(3),
    td:nth-child(3),
    th:nth-child(4),
    td:nth-child(4) {
      text-align: center; /* Sejajarkan Kategori Buku dan Jumlah Buku */
    }
  </style>
</head>
<body>
  <div class="action-buttons">
    <a href="excel_username.php">EXCEL</a>
    <a href="pdf_username.php">PDF</a>
  </div>
  <div class="container">
    <h2>Cetak Data Username Admin</h2>
    <table>
      <thead>
        <tr>
          <th>ID User</th>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
      <?php
    include 'koneksi.php';
    $datauser = mysqli_query($kon,"select * from username");
    while ($tampil = mysqli_fetch_array($datauser)){
    ?>
    <tr>
        <td><?php echo $tampil ['id_user'];?></td>
        <td><?php echo $tampil ['username'];?></td>
        <td><?php echo $tampil ['password'];?></td>
        <td><?php echo $tampil ['email'];?></td>
    </tr>
    <?php } ?>
        <!-- Tambahkan baris data tambahan sesuai kebutuhan -->
      </tbody>
    </table>
    <div class="form-container">
      <!-- Form atau konten lainnya -->
    </div>
  </div>
  <script>
  // Fungsi untuk mengarahkan ke halaman home saat tombol "Home" ditekan
  function goToHome() {
    window.location.href = "index2.php";  // Ganti "index.html" dengan URL halaman home Anda
  }

  // Tambahkan link atau tombol "Home" di pojok kanan atas
  const actionButtons = document.querySelector(".action-buttons");

  const homeButton = document.createElement("a");
  homeButton.textContent = "Home";
  homeButton.classList.add("home-button");  // Tambahkan class untuk styling

  // Tambahkan event listener untuk tombol "Home"
  homeButton.addEventListener("click", goToHome);

  // Masukkan tombol "Home" ke dalam container .action-buttons
  actionButtons.appendChild(homeButton);
</script>

</body>
</html>
