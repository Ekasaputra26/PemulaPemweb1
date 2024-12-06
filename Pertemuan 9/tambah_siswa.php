<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama = mysqli_real_escape_string($konek, $_POST['nama_siswa']);
    $alamat = mysqli_real_escape_string($konek, $_POST['alamat_siswa']);
    $agama = mysqli_real_escape_string($konek, $_POST['agama_siswa']);
    $asal_sekolah = mysqli_real_escape_string($konek, $_POST['asal_sekolah']);

    // Query untuk menambahkan data ke database
    $query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama_siswa, asal_sekolah) 
              VALUES ('$nama', '$alamat', '$agama', '$asal_sekolah')";

    if (mysqli_query($konek, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($konek) . "');</script>";
    }
}

?>
<form action="" method="post">
    <label for="nama_siswa">Nama Siswa:</label>
    <input type="text" id="nama_siswa" name="nama_siswa" required>

    <label for="alamat_siswa">Alamat:</label>
    <input type="text" id="alamat_siswa" name="alamat_siswa" required>

    <label for="agama_siswa">Agama:</label>
    <input type="text" id="agama_siswa" name="agama_siswa" required>

    <label for="asal_sekolah">Asal Sekolah:</label>
    <input type="text" id="asal_sekolah" name="asal_sekolah" required>

    <button type="submit" name="submit">Tambah Data</button>
</form>