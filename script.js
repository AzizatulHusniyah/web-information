// Tampilkan pesan selamat datang saat halaman dimuat
window.onload = function() {
    alert('Selamat datang di situs IMAGE UNESA!');
};

// Tambahkan scroll halus ketika menavigasi ke bagian lain di halaman
document.querySelectorAll('nav a').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        document.getElementById(targetId).scrollIntoView({
            behavior: 'instant'
        });
    });
});
