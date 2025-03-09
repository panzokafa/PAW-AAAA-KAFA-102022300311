<?php

include 'koneksi.php';

// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $nim = "";
$namaErr = $emailErr = $nimErr = "";

    // **********************  1  **************************  
    // Tangkap nilai nama yang ada pada form HTML
    // silakan taruh kode kalian di bawah
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nama"])) {
        $namaErr = "Nama wajib diisi";
    } else {
        $nama = test_input($_POST["nama"]);
    }

    // **********************  2  **************************  
    // Validasi format email agar sesuai dengan standar
    // silakan taruh kode kalian di bawah
    if (empty($_POST["email"])) {
        $emailErr = "Email wajib diisi";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }

    // **********************  3  **************************  
    // Pastikan NIM terisi dan  angka
    // silakan taruh kode kalian di bawah
    if (empty($_POST["nim"])) {
        $nimErr = "NIM wajib diisi";
    } else {
        $nim = test_input($_POST["nim"]);
        if (!ctype_digit($nim)) {
            $nimErr = "NIM harus berupa angka";
        }
    }

    if (empty($namaErr) && empty($emailErr) && empty($nimErr)) {
        $sql = "INSERT INTO mahasiswa (nama, email, nim) VALUES ('$nama', '$email', '$nim')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<div class='alert alert-success'>Berhasil! Data pendaftaran telah diterima</div>";
        } else {
            echo "<div class='alert alert-danger'>Kesalahan! Harap Perbaiki data yang salah " . $sql . "<br>" . mysqli_error($koneksi) . "</div>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>
        

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <!-- **********************  4  ************************** -->
         <!-- Tambahkan kolom input untuk Nama, Email, dan NIM dengan mengambil class form-group sebagai referensi -->
            <div class="form-group">
                <!-- tambahkan label nama -->
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <!-- Tampilkan pesan error jika variabel $namaErr tidak kosong -->
                <?php if (!empty($namaErr)) { ?>
                    <span class="error"><?php echo $namaErr; ?></span>
                <?php } ?>
            </div>

            <div class="form-group">
                <!-- tambahkan label email -->
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                 <!-- Tampilkan pesan error jika variabel $emailErr tidak kosong -->
                <?php if (!empty($emailErr)) { ?>
                    <span class="error"><?php echo $emailErr; ?></span>
                <?php } ?>
            </div>

            <div class="form-group">
                <!-- tambahkan label nim -->
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">
                <!-- Tampilkan pesan error jika variabel $nimErr tidak kosong -->
                <?php if (!empty($nimErr)) { ?>
                    <span class="error"><?php echo $nimErr; ?></span>
                <?php } ?>
            </div>

            <div class="button-container">
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>