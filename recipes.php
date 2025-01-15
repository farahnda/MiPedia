<?php include 'includes/header.php'; ?>

<main>
    <section class="resep">
        <h2 id="resep">Resep Olahan Mi</h2>
        <div class="resep-container">
            <div class="carousel-wrapper">
                <button class="prev-btn" onclick="changeSlide(-1)"><</button>
                <div class="carousel">
                    <div class="carousel-item" id="slide-1">
                        <h3>Mie Goreng Tek Tek</h3>
                        <p><strong>Bahan-bahan:</strong></p>
                        <ul>
                            <li>1 bungkus mie instan (merk bebas)</li>
                            <li>3 buah baso sapi</li>
                            <li>1 buah pokcoy</li>
                            <li>1 lembar kol putih</li>
                            <!-- <li>1/2 buah tomat</li> -->
                            <!-- <li>1/2 batang daun bawang</li>
                            <li>1 buah bawang putih</li>
                            <li>1 buah kemiri</li>
                            <li>1/9 sdt garam</li>
                            <li>1/6 sdt gula pasir</li>
                            <li>1 sdm saos cabe</li>
                            <li>1 sdt saos tiram</li>
                            <li>100 ml air</li> -->
                        </ul>
                        <p><strong>Cara Membuat:</strong></p>
                        <ol>
                            <li>Siapkan bahan. Rebus mie di air mendidih sekitar 3 menit, tiriskan. Cuci pokcoy, kol, daun bawang dan tomat, iris-iris, sisihkan. Haluskan bawang putih dan kemiri. </li>
                            <p><a href="https://cookpad.com/id/resep/24303603-mie-goreng-tek-tek?ref=search&search_term=mie">Lihat Selengkapnya</a></p>

                            <!-- <li>Iris baso, sisihkan. Tumis baput dan kemiri sampai harum, masukkan irisan baso, masak dg api kecil sekitar 3 menit.</li>
                            <li>Tambahkan air,saos tiram,saos sambal,setelah mendidih masukkan batang pokcoy dan kol, masak sekitar 2 menit masukkan bagian daun pokcoy, tomat, garam dan gula pasir.</li>
                            <li> Masukkan mie dan daun bawang,aduk rata. Cek rasa. Matikan kompor. Sajikan.</li> -->
                        </ol>
                    </div>
                    <div class="carousel-item" id="slide-2">
                        <h3>Mi Goreng Jawa</h3>
                        <p><strong>Bahan-bahan:</strong></p>
                        <ul>
                            <li>400 gram mie</li>
                            <li>Kol (iris)</li>
                            <li>2 butir telur</li>
                            <li>1/2 buah tomat (potong-potong)</li>
                        </ul>
                        <p><strong>Cara Membuat:</strong></p>
                        <ol>
                            <li>Rebus mie hingga matang lalu sisihkan.</li>
                            <li>Haluskan semua bumbu dengan sedikit minyak dan air menggunakan blender.</li>
                            <li>Tumis bumbu halus hingga matang dan harum.</li>
                            <p><a href="https://www.tokopedia.com/blog/resep-mie-goreng-jawa-hlv/?utm_source=google&utm_medium=organic">Lihat selengkapnya</a></p>
                        </ol>
                    </div>
                    <div class="carousel-item" id="slide-3">
                        <h3>Ramen Kuah Pedas</h3>
                        <p><strong>Bahan-bahan:</strong></p>
                        <ul>
                            <li>Mie ramen instan</li>
                            <li>3 sdm minyak untuk menumis</li>
                            <li>3 siung bawang putih cincang</li>
                            <li>2 cm jahe segar memarkan</li>
                            <!-- <li>2 sdm daun bawang iris halus</li> -->
                        </ul>
                        <p><strong>Cara Membuat:</strong></p>
                        <ol>
                            <li>Rebus 1 liter air hingga mendidih.</li>
                            <li>Sambil menunggu, tumis bawang putih, jahe segar, dan daun bawang hingga harum. Masukkan ke dalam rebusan air setelah mendidih.</li>
                            <!-- <li>Masukkan mie, sayuran, dan telur. Aduk perlahan hingga matang.</li> -->
                            <p><a href="https://www.royco.co.id/r/resep-ramen-lezat-dengan-kuah-pedas.html/230919">Lihat selengkapnya</a></p>
                        </ol>
                    </div>
                </div>
                <button class="next-btn" onclick="changeSlide(1)">></button>
            </div>
            <div class="image-wrapper">
                <a id="recipe-link" href="https://cookpad.com/id/resep/24303603-mie-goreng-tek-tek?ref=search&search_term=mie" target="_blank">
                    <img src="assets/img/mitektek.jpg" alt="Resep Mi Tek Tek" id="recipe-image" />        
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    const slides = document.querySelectorAll('.carousel-item');
    const recipeImage = document.getElementById('recipe-image');
    const images = [
        'assets/img/mitektek.jpg', // Gambar untuk Slide 1
        'assets/img/migorengjawa.jpg', // Gambar untuk Slide 2
        'assets/img/miramenkuahpedas.jpg' // Gambar untuk Slide 3
    ];
    let currentSlide = 0;

    function changeSlide(direction) {
        // Sembunyikan slide aktif
        slides[currentSlide].style.display = 'none';

        // Hitung indeks slide berikutnya
        currentSlide = (currentSlide + direction + slides.length) % slides.length;

        // Tampilkan slide baru
        slides[currentSlide].style.display = 'block';

        // Ganti gambar
        recipeImage.src = images[currentSlide];
        recipeImage.alt = slides[currentSlide].querySelector('h3').textContent; // Ganti alt sesuai judul resep
    }

    // Inisialisasi: Tampilkan hanya slide pertama
    slides.forEach((slide, index) => {
        slide.style.display = index === 0 ? 'block' : 'none';
    });
</script>

<style>
    .resep-container {
    display: flex;
    align-items: center;
}

.carousel-wrapper {
    flex: 1;
    position: relative;
}

.image-wrapper {
    flex: 0 0 auto;
    margin-left: 20px;
}

.image-wrapper img {
    max-width: 300px; /* Sesuaikan ukuran gambar */
    border-radius: 8px;
}
</style>

<?php include 'includes/footer.php'; ?>