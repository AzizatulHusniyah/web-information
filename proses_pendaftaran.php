<?php
// proses_pendaftaran.php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $fakultas = mysqli_real_escape_string($conn, $_POST['fakultas']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
    $sie = mysqli_real_escape_string($conn, $_POST['sie']);

    // Query untuk insert data
    $query = "INSERT INTO members (nama, nim, fakultas, prodi, email, no_telepon, sie) 
              VALUES ('$nama', '$nim', '$fakultas', '$prodi', '$email', '$no_telepon', '$sie')";

    // Jalankan query
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Pendaftaran berhasil!');
                window.location.href = 'form_pendaftaran.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
                window.location.href = 'form_pendaftaran.php';
              </script>";
    }

    mysqli_close($conn);
}
?>