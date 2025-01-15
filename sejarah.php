<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Mie - MiPedia</title>
    <link rel="stylesheet" href="sejarah.css">
</head>
<body>
    <main>
        <h1>Sejarah Mi</h1>
        <section class="timeline">
            <h2>Timeline Sejarah Mie</h2>

            <div class="timeline-item" onclick="toggleInfo('info1')">
            <strong>2000 SM:</strong> Mie pertama kali ditemukan di Tiongkok.
            <img src="assets/img/icon1.jpg" alt="Icon 2000 SM" class="timeline-icon">
                <div id="info1" class="info">
                <p>Informasi lebih lanjut tentang mie kuno. <a href="https://chinalivesf.com/chinese-noodles-a-stringy-tale-from-the-far-east/" target="_blank">Baca lebih lanjut</a></p>
                </div>
            </div>
    
            <div class="timeline-item" onclick="toggleInfo('info2')">
            <strong>1200 M:</strong> Mie menyebar ke Jepang.
            <img src="assets/img/icon2.jpg" alt="Icon 1200 M" class="timeline-icon">
                <div id="info2" class="info">
                <p>Informasi lebih lanjut tentang penyebaran mie ke Jepang. <a href="https://en.wikipedia.org/wiki/Japanese_noodles" target="_blank">Baca lebih lanjut</a></p>
                </div>
            </div>

            <div class="timeline-item" onclick="toggleInfo('info3')">
            <strong>1800 M:</strong> Mie instan pertama kali diperkenalkan.
            <img src="assets/img/icon3.jpg" alt="Icon 1800 M" class="timeline-icon">
                <div id="info3" class="info">
                <p>Informasi lebih lanjut tentang mie instan. <a href="https://entrepreneur.bisnis.com/read/20230904/265/1691377/momofuku-ando-sosok-penemu-mi-instan-yang-kini-mendunia" target="_blank">Baca lebih lanjut</a></p>
                </div>
            </div>

            <div class="timeline-item" onclick="toggleInfo('info4')">
            <strong>1970-an:</strong> Mie menjadi populer di seluruh dunia.
            <img src="assets/img/icon4.jpg" alt="Icon 1970-an" class="timeline-icon">
                <div id="info4" class="info">
                <p>Informasi lebih lanjut tentang popularitas mie. <a href="https://manadopost.jawapos.com/lifestyle-teknologi/284979260/mie-instan-dari-makanan-rakyat-hingga-penyelamat-dunia" target="_blank">Baca lebih lanjut</a></p>
                </div>
            </div>
</section>

        <section class="infographic">
            <h2>Infografis Sejarah Mie</h2>
            <img src="assets/img/infografis2.png" alt="Infografis Mie" width="600">
            <p><a href="assets/img/infografis2.png" download>Unduh Infografis</a></p>
        </section>

        <section class="video-container">
            <h2>Kenapa sih kita suka mi instan?</h2>
            <iframe width="600" height="400" src="https://www.youtube.com/embed/_cOssRAhVIQ" frameborder="0" allowfullscreen></iframe>
        </section>

        <section class="quiz">
            <h2>Kuis Sejarah Mie</h2>
            <p>Siapa yang menemukan mie pertama kali?</p>
            <div class="quiz-options">
                    <button class="quiz-button" onclick="checkAnswer('Tiongkok')">Tiongkok</button>
                    <button class="quiz-button" onclick="checkAnswer('Jepang')">Jepang</button>
                    <button class="quiz-button" onclick="checkAnswer('Italia')">Italia</button>
            </div>
            <p id="quiz-result" class="quiz-result"></p>
        </section>

        <section>
        <section class="cerita-mie">
    <h2>Cerita Mie dari Berbagai Negara</h2>
    <div class="grid-container">
        <div class="grid-item">
            <img src="assets/img/china.jpg" alt="Bendera Tiongkok" class="flag">
            <h3>Tiongkok</h3>
            <p>Mi La mian sering ditarik hingga menjadi sangat panjang untuk melambangkan umur panjang dalam perayaan ulang tahun.</p>
        </div>
        <div class="grid-item">
            <img src="assets/img/jepang.jpg" alt="Bendera Jepang" class="flag">
            <h3>Jepang</h3>
            <p>Jepang bahkan punya museum ramen di Yokohama yang menampilkan sejarah dan variasi ramen!</p>
        </div>
        <div class="grid-item">
            <img src="assets/img/italia.png" alt="Bendera Italia" class="flag">
            <h3>Italia</h3>
            <p>Pasta Italia memiliki lebih dari 300 bentuk berbeda, seperti fusilli, penne, dan farfalle.</p>
        </div>
        <div class="grid-item">
            <img src="assets/img/indonesia.png" alt="Bendera Indonesia" class="flag">
            <h3>Indonesia</h3>
            <p>Indomie Mi Goreng pernah masuk daftar "mi instan terenak di dunia" versi para pencicip makanan internasional.</p>
        </div>
        <div class="grid-item">
            <img src="assets/img/thailand.png" alt="Bendera Thailand" class="flag">
            <h3>Thailand</h3>
            <p>Pad Thai termasuk dalam daftar makanan terenak dunia versi CNN Travel!</p>
        </div>
        <div class="grid-item">
            <img src="assets/img/vietnam.jpg" alt="Bendera Vietnam" class="flag">
            <h3>Vietnam</h3>
            <p>Pho dianggap sebagai makanan nasional Vietnam dan sering dimakan sebagai sarapan.</p>
        </div>
    </div>
</section>
        </section>
    
    </main>

    <script>
        function toggleInfo(infoId) {
            const infoElement = document.getElementById(infoId);
            if (infoElement.style.display === "none" || infoElement.style.display === "") {
                infoElement.style.display = "block";
            } else {
                infoElement.style.display = "none";
            }
        }

    function checkAnswer(answer) {
        const correctAnswer = 'Tiongkok';
        const resultElement = document.getElementById('quiz-result');
        if (answer === correctAnswer) {
            resultElement.textContent = 'Jawaban Anda benar!';
        } else {
            resultElement.textContent = 'Jawaban Anda salah. Coba lagi!';
        }
    }

    document.getElementById('poll-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const selectedOption = document.querySelector('input[name="mie"]:checked');
        const resultElement = document.getElementById('poll-result');
        if (selectedOption) {
            resultElement.textContent = `Anda memilih: ${selectedOption.value}`;
        } else {
            resultElement.textContent = 'Silakan pilih jenis mie favorit Anda!';
        }
    });

    </script>
</body>
</html>
<?php include 'includes/footer.php'; ?>