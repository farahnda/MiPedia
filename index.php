<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>MiPedia:</h1>
            <h2>Semua Tentang <span>Mi</span></h2>
            <h2>Semua Ada <span>Di sini</span></h2>
            <p>Di situ ada Mi di situ ada kita!</p>
            <?php
            if(!isset($_SESSION['user_id'])) {
                echo '<a href="login.php"><button class="read-more">Read more</button></a>';
            }
            ?>
        </div>
        <div class="hero-images">
            <div class="food-card">
                <img src="assets/img/jepang.png" alt="Ramen">
                <p>Jepang</p>
                <span>Ramen</span>
            </div>
            <div class="food-card">
                <img src="assets/img/korea.png" alt="Jajangmyeon">
                <p>Korea</p>
                <span>Jajangmyeon</span>
            </div>
            <div class="food-card">
                <img src="assets/img/taiwan.png" alt="Mi Taiwan">
                <p>Taiwan</p>
                <span>Taiwanese Noodle</span>
            </div>
            <div class="food-card">
                <img src="assets/img/indo.png" alt="Mi Indonesia">
                <p>Indonesia</p>
                <span>Mi Ayam</span>
            </div>
        </div>
    </section>

    <div class="floating-elements">
    <img src="assets/img/mie.png" alt="floating noodle" class="float-item float-left">
    <img src="assets/img/mie.png" alt="floating noodle" class="float-item float-right">
    </div>

    <!-- Jenis-Jenis Mi Section -->
    <section class="noodle-types">
        <h2 id='jenis-jenis'>Jenis-Jenis Mi</h2>
        <div class="noodle-grid">
            <div class="noodle-card">
                <img src="assets/img/mietelur.png" alt="Mi Telur">
                <div class="noodle-content">
                    <h3>Mi Telur</h3>
                    <p>Mi populer di Indonesia, terbuat dari tepung terigu dan telur. Dapat diproduksi dalam bentuk kering atau basah, dan dapat diolah dengan direbus atau ditambahkan kuah.</p>
                </div>
            </div>
            
            <div class="noodle-card">
                <img src="assets/img/kwetiaw.png" alt="Kwetiau">
                <div class="noodle-content">
                    <h3>Kwetiau</h3>
                    <p>Mi berwarna yang berbentuk pipih dan lebar, terbuat dari tepung beras dan air.</p>
                </div>
            </div>
            
            <div class="noodle-card">
                <img src="assets/img/suun.png" alt="Soun">
                <div class="noodle-content">
                    <h3>Soun</h3>
                    <p>Mi yang terbuat dari campuran tepung kentang dan tepung kacang hijau, warnanya putih bersih dan menjadi putih transparan setelah dimasak.</p>
                </div>
            </div>
            
            <div class="noodle-card">
                <img src="assets/img/miesoba.png" alt="Mi Soba">
                <div class="noodle-content">
                    <h3>Mi Soba</h3>
                    <p>Mi Jepang yang dibuat dari tepung gandum soba yang sehat karena mengandung tinggi protein, serat, beberapa vitamin dan mineral, serta rendah lemak.</p>
                </div>
            </div>
            
            <div class="noodle-card">
                <img src="assets/img/miekenyal.png" alt="Mi Kenyal">
                <div class="noodle-content">
                    <h3>Mi Kenyal</h3>
                    <p>Mi yang terbuat dari mie ebek, yang diolah dari tepung tapioka.</p>
                </div>
            </div>
            
            <div class="noodle-card">
                <img src="assets/img/miekaret.png" alt="Mi Karet">
                <div class="noodle-content">
                    <h3>Mi Karet</h3>
                    <p>Mi dengan tekstur kenyal dan elastis yang sangat populer di berbagai masakan Asia, khususnya di Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="fun-facts">
        <p class="subtitle">Tahukah kamu hal menarik dari Mi?</p>
        <h2>Fun Fact Mi</h2>
        <div class="facts-container">
            <div class="fact-card">
                <div class="fact-icon">
                    <img src="assets/img/panjang.png" alt="Mi Terpanjang">
                </div>
                <h3>Mi Terpanjang di Dunia</h3>
                <p>Mi terpanjang di dunia berhasil memecahkan rekor mencapai panjang 3.084 meter dan dibuat di Hantan, Tiongkok, pada tahun 2007. Ini hampir sepanjang 30 lapangan sepak bola!</p>
            </div>

            <div class="fact-card">
                <div class="fact-icon">
                    <img src="assets/img/beruntung.png" alt="Simbol Keberuntungan">
                </div>
                <h3>Simbol Keberuntungan</h3>
                <p>Di Tiongkok, mi memiliki makna sebagai simbol umur panjang dan sering digunakan saat ulang tahun untuk membawa keberuntungan.</p>
            </div>

            <div class="fact-card">
                <div class="fact-icon">
                    <img src="assets/img/museum.png" alt="Museum Mi">
                </div>
                <h3>Museum Mi Instan</h3>
                <p>Sebagai bukti kepopuleran mi instan di kehidupan masyarakat, Museum Cup Noodles dibangun di Yokohama, Jepang.</p>
            </div>
        </div>
    </section>

    <!-- Sejarah Mi Section -->
    <section class="history">
        <p class="subtitle">Gimana sih Sejarah Mi ini?</p>
        <h2>Sejarah Mi</h2>
        <div class="timeline">
            <div class="timeline-item awal">
                <img src="assets/img/awal.png" alt="Awal Sejarah Mi">
                <div class="dot"></div>
                <h3>AWAL</h3>
                <p>Pertama kali mi dibuat di daratan utara China. Sekitar abad kedua, makanan dalam bentuk mi muncul pada zaman kekaisaran Tiongkok kedua yakni Dinasti Han.</p>
            </div>

            <div class="timeline-item pertengahan">
                <img src="assets/img/tengah.png" alt="Pertengahan Sejarah Mi">
                <div class="dot"></div>
                <h3>PERTENGAHAN</h3>
                <p>Mengalami perkembangan pada periode Mongol (1279-1368). Pada saat itu, mi sudah meluas ke Jepang, kemudian pada abad ke-10 masuk ke Afghanistan dan Iran.</p>
            </div>

            <div class="timeline-item akhir">
                <img src="assets/img/akhir.png" alt="Akhir Sejarah Mi">
                <div class="dot"></div>
                <h3>AKHIR</h3>
                <p>Bahkan di kalangan barat mi mengalami lebih jauh lagi tiada dan berkembang menjadi pasta. Berbagai budaya mi menyebar ke Asia Tenggara antara abad ke-16 dan awal abad ke-19.</p>
            </div>
        </div>
    </section>

<!-- Resep Section -->
<section class="resep">
  <h2 id="resep">Resep Olahan Mi</h2>
  <div class="resep-container">
    <div class="carousel-wrapper">
      <button class="prev-btn"><</button>
      <div class="carousel">
        <div class="carousel-item">
          <h3>Mie Tek Tek ala Jawa</h3>
          <p><strong>Bahan-bahan:</strong></p>
          <ul>
            <li>Mie burung dara</li>
            <li>1 buah tomat potong kotak-kotak</li>
            <li>Baso sapi</li>
            <li>1/2 ekor ayam presto</li>
            <li>1 butir telur</li>
          </ul>
          <a href="#">Resep lengkapnya di sini</a>
        </div>
        <div class="carousel-item">
          <h3>Resep Mi Goreng Spesial</h3>
          <p><strong>Bahan-bahan:</strong></p>
          <ul>
            <li>Mie instan goreng</li>
            <li>2 butir telur</li>
            <li>Sayur-sayuran (sesuai selera)</li>
            <li>Bakso ayam</li>
          </ul>
          <a href="#">Resep lengkapnya di sini</a>
        </div>
        <!-- Tambahkan resep lainnya di sini -->
      </div>
      <button class="next-btn">></button>
    </div>
    <div class="image-wrapper">
      <img src="assets/img/mietektek.jpg" alt="Resep Mi Tektek" />
    </div>
  </div>
</section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="newsletter-content">
            <img src="assets/img/pho.png" alt="pho" class="overlay">
            <h2>Subscribe To Our Newsletter</h2>
            <p>Dengan berlangganan, Anda akan menerima update berkala mengenai resep-resep terbaru, 
            fakta menarik seputar mie, serta tips kuliner. Bergabunglah sekarang dan nikmati berbagai 
            konten eksklusif yang hanya tersedia bagi para pelanggan buletin kami.</p>
            <form action="process_newsletter.php" method="POST" class="subscribe-form">
                    <input type="email" name="email" placeholder="Masukkan email Anda" required>
                    <button type="submit" name="subscribe">Berlangganan</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>