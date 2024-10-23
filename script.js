// Tampilkan pesan selamat datang saat halaman dimuat
window.onload = function() {
    alert('Selamat datang di situs IMAGE UNESA!');
};

// Daftar gambar yang ingin Anda tampilkan di setiap gallery-item
const galleryImages = {
    "gallery-image-1": [
        "gambar/welcomeparty.jpg",
        "gambar/welcomeparty2.jpg",
        "gambar/welcomeparty3.jpg"
    ],
    "gallery-image-2": [
        "gambar/foto.jpg",
        "gambar/foto2.jpg",
        "gambar/foto3.jpg"
    ],
    "gallery-image-3": [
        "gambar/upgrading.jpg",
        "gambar/upgrading2.jpg",
        "gambar/upgrading3.jpg"
    ],
    "gallery-image-4": [
        "gambar/lensa budaya.jpg",
        "gambar/lensa budaya2.jpg",
        "gambar/lensa budaya3.jpg"
    ]
};

// Fungsi untuk mengganti gambar secara berkala
function rotateImages() {
    for (let id in galleryImages) {
        let images = galleryImages[id]; // Dapatkan array gambar untuk id tertentu
        let imgElement = document.getElementById(id);
        let currentIndex = 0;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length; // Perpindahan gambar
            imgElement.src = images[currentIndex]; // Ganti sumber gambar
        }, 3000); // Setiap 3 detik (3000 ms)
    }
}

// Jalankan fungsi setelah halaman dimuat
window.onload = rotateImages;
