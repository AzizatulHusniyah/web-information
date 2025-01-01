<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota - IMAGE UNESA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <img src="gambar/logo.png" alt="Logo IMAGE UNESA" height="100">
            </div>
            <div class="title-container">
                <h1>IKATAN MAHASISWA GRESIK UNESA</h1>
            </div>
            <ul>
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#about">Tentang</a></li>
                <li><a href="index.html#gallery">Galeri</a></li>
                <li><a href="index.html#contact">Kontak</a></li>
                <li><a href="form_pendaftaran.php">Pendaftaran</a></li>
            </ul>
        </nav>
    </header>

    <section class="content" style="margin-top: 100px;">
        <h2>Form Pendaftaran Anggota</h2>
        <form action="proses_pendaftaran.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required pattern="[0-9]{11}" title="NIM harus 11 digit angka">
            </div>

            <div class="form-group">
                <label for="fakultas">Fakultas:</label>
                <select id="fakultas" name="fakultas" required>
                    <option value="">Pilih Fakultas</option>
                    <option value="FIP">FIP - Fakultas Ilmu Pendidikan</option>
                    <option value="FISH">FISH - Fakultas Ilmu Sosial dan Hukum</option>
                    <option value="FBS">FBS - Fakultas Bahasa dan Seni</option>
                    <option value="FIO">FIO - Fakultas Ilmu Olahraga</option>
                    <option value="FT">FT - Fakultas Teknik</option>
                    <option value="FMIPA">FMIPA - Fakultas Matematika dan IPA</option>
                    <option value="FEB">FE - Fakultas Ekonomi</option>
                    <option value="Vokasi">Vokasi - Fakultas Vokasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi:</label>
                <input type="text" id="prodi" name="prodi" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="no_telepon">Nomor Telepon:</label>
                <input type="tel" id="no_telepon" name="no_telepon" required pattern="[0-9]{10,13}" title="Nomor telepon harus 10-13 digit">
            </div>

            <div class="form-group">
                <label for="sie">Pilih SIE:</label>
                <select id="sie" name="sie" required>
                    <option value="">Pilih SIE</option>
                    <option value="Pengembangan Organisasi">Pengembangan Organisasi</option>
                    <option value="Pendidikan dan Budaya">Pendidikan dan Budaya</option>
                    <option value="Minat dan Bakat">Minat dan Bakat</option>
                    <option value="Ekonomi Kreatif">Ekonomi Kreatif</option>
                    <option value="Sosial Kerohanian">Sosial Kerohanian</option>
                    <option value="Komunikasi dan Informasi">Komunikasi dan Informasi</option>
                </select>
            </div>

            <button type="submit" class="btn-daftar">Daftar</button>
            <button type="button" class="btn-kembali" onclick="window.location.href='index.html'" style="margin-left: 10px; background-color: #666;">Kembali ke Beranda</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 IMAGE UNESA. Semua Hak Cipta Dilindungi.</p>
    </footer>

    <script>
    function validateForm() {
        var nim = document.getElementById("nim").value;
        var noTelp = document.getElementById("no_telepon").value;
        
        if (nim.length !== 11) {
            alert("NIM harus 11 digit!");
            return false;
        }
        
        if (noTelp.length < 10 || noTelp.length > 13) {
            alert("Nomor telepon harus antara 10-13 digit!");
            return false;
        }
        
        return true;
    }
    </script>
</body>
</html>
