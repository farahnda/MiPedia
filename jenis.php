<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis-Jenis Mie - MiPedia</title>
    <link rel="stylesheet" href="jenis.css">
</head>
<body>
    <header>
        <h1>Jenis-Jenis Mie</h1>
    </header>
    <main class="jenis-container">
        
        
        <!-- Mie Telur -->
        <div class="jenis-item" onclick="openModal('mie-telur')">
            <img src="assets/img/mietelur.png" alt="Mi Telur">
            <h2>Mi Telur</h2>
            <p>Mi telur adalah jenis mie yang terbuat dari tepung terigu dan telur...</p>
        </div>
        
        <!-- Kwetiau -->
        <div class="jenis-item" onclick="openModal('kwetiau')">
            <img src="assets/img/kwetiaw.png" alt="Kwetiau">
            <h2>Kwetiau</h2>
            <p>Kwetiau adalah mie berbentuk pipih yang lembut dan kenyal...</p>
        </div>
        
        <!-- Soun -->
        <div class="jenis-item" onclick="openModal('soun')">
            <img src="assets/img/suun.png" alt="Soun">
            <h2>Soun</h2>
            <p>Soun adalah mie transparan yang sering digunakan dalam sup atau tumisan...</p>
        </div>
        
        <!-- Mi Soba -->
        <div class="jenis-item" onclick="openModal('mie-soba')">
            <img src="assets/img/miesoba.png" alt="Mi Soba">
            <h2>Mi Soba</h2>
            <p>Mi soba berasal dari Jepang, memiliki rasa khas dan kaya manfaat...</p>
        </div>
        
        <!-- Mi Kenyal -->
        <div class="jenis-item" onclick="openModal('mie-kenyal')">
            <img src="assets/img/miekenyal.png" alt="Mi Kenyal">
            <h2>Mi Kenyal</h2>
            <p>Mi kenyal memiliki tekstur elastis, sering digunakan dalam masakan kuah...</p>
        </div>
        
        <!-- Mi Karet -->
        <div class="jenis-item" onclick="openModal('mie-karet')">
            <img src="assets/img/miekaret.png" alt="Mi Karet">
            <h2>Mi Karet</h2>
            <p>Mi karet memiliki tekstur elastis dan sering digunakan dalam mie goreng...</p>
        </div>

    </main>
    
    <section class="nutrisi-section">
    <h2>Perbandingan Nutrisi Mie</h2>
    <p>Berikut adalah perbandingan kandungan nutrisi untuk beberapa jenis mie yang populer:</p>
    <table class="nutrisi-table">
        <thead>
            <tr>
                <th>Jenis Mie</th>
                <th>Kalori (per 100g)</th>
                <th>Protein</th>
                <th>Karbohidrat</th>
                <th>Serat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mi Telur</td>
                <td>138</td>
                <td>5g</td>
                <td>26g</td>
                <td>1g</td>
            </tr>
            <tr>
                <td>Kwetiau</td>
                <td>190</td>
                <td>3g</td>
                <td>40g</td>
                <td>0.5g</td>
            </tr>
            <tr>
                <td>Soun</td>
                <td>110</td>
                <td>1.5g</td>
                <td>23g</td>
                <td>1g</td>
            </tr>
            <tr>
                <td>Mi Soba</td>
                <td>113</td>
                <td>4g</td>
                <td>24g</td>
                <td>2g</td>
            </tr>
            <tr>
                <td>Mi Kenyal</td>
                <td>180</td>
                <td>2g</td>
                <td>40g</td>
                <td>2g</td>
            </tr>
            <tr>
                <td>Mi Karet</td>
                <td>170</td>
                <td>4g</td>
                <td>35g</td>
                <td>1g</td>
            </tr>
        </tbody>
    </table>
</section>



    <!-- Modal Template -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <div id="modal-body">
                <!-- Konten rinci akan diisi lewat JavaScript -->
            </div>
        </div>
    </div>

    <script>
        function openModal(detailId) {
    const detailContent = {
        "mie-telur": "<h2>Mi Telur</h2><p>Mi telur adalah salah satu jenis mie yang paling populer di Indonesia. Mi ini terbuat dari campuran tepung terigu dan telur yang memberikan rasa yang kaya dan tekstur kenyal. Biasanya digunakan dalam berbagai hidangan seperti mie goreng, mie kuah, hingga bakmi tradisional. Mi telur dapat disajikan dalam kondisi kering atau basah, dan sering diolah dengan tambahan daging, sayuran, dan bumbu khas nusantara. Di luar Indonesia, mi telur juga dikenal sebagai 'egg noodles' dan digunakan dalam masakan Tionghoa serta Asia Tenggara.</p>",
        "kwetiau": "<h2>Kwetiau</h2><p>Kwetiau adalah mie berbentuk pipih dan lebar yang terbuat dari tepung beras. Teksturnya lembut namun kenyal, membuatnya cocok untuk berbagai hidangan seperti kwetiau goreng, kwetiau kuah, atau kwetiau siram. Hidangan ini sangat populer di kalangan masyarakat Tionghoa di Indonesia. Kwetiau biasanya disajikan dengan tambahan daging sapi, ayam, seafood, atau sayuran seperti sawi dan tauge. Hidangan ini juga sering dilengkapi dengan bumbu kecap manis dan bawang putih, memberikan cita rasa yang khas.</p>",
        "soun": "<h2>Soun</h2><p>Soun adalah mie transparan yang terbuat dari campuran tepung kacang hijau atau kentang. Teksturnya halus dan sedikit licin setelah dimasak. Soun sering digunakan dalam masakan sup, seperti soto ayam atau sup kimlo, serta hidangan tumis seperti capcay. Selain itu, soun juga menjadi bahan utama dalam salad dingin seperti bihun soun dan sering digunakan sebagai pengisi dalam lumpia atau pastel. Keunikan soun adalah kemampuannya menyerap rasa bumbu tanpa kehilangan bentuk.</p>",
        "mie-soba": "<h2>Mi Soba</h2><p>Mi soba berasal dari Jepang dan terbuat dari tepung gandum soba (buckwheat). Mi ini memiliki warna cokelat khas dan tekstur yang lembut. Mi soba dikenal kaya akan nutrisi, termasuk serat, protein, dan mineral seperti magnesium. Hidangan populer dengan mi soba adalah *zaru soba* (soba dingin dengan saus celup) dan *kake soba* (soba panas dengan sup). Di Jepang, mi soba juga memiliki nilai budaya, sering disajikan pada malam tahun baru sebagai simbol harapan untuk umur panjang.</p>",
        "mie-kenyal": "<h2>Mi Kenyal</h2><p>Mi kenyal adalah mie unik yang terbuat dari tepung tapioka, memberikan tekstur elastis dan kenyal saat dimakan. Mi ini sering digunakan dalam hidangan khas Indonesia seperti bakso, mie ayam, atau mie pangsit. Teksturnya yang kenyal menjadikannya favorit di kalangan pecinta kuliner karena mampu menyerap kuah atau bumbu dengan baik. Beberapa daerah juga menyebutnya sebagai 'mi ebek', yang biasanya disajikan dengan kuah kaldu yang kaya rasa.</p>",
        "mie-karet": "<h2>Mi Karet</h2><p>Mi karet terkenal karena tekstur elastisnya yang menyerupai karet. Terbuat dari tepung terigu berkualitas tinggi, mi ini sering digunakan dalam hidangan bakmi khas Indonesia. Biasanya mi karet dihidangkan dengan topping seperti ayam kecap, daging babi cincang, pangsit goreng, atau sayuran segar. Teksturnya yang unik membuatnya mampu menyerap bumbu dan saus dengan baik, memberikan rasa yang memanjakan lidah. Mi karet sangat populer di restoran Chinese food lokal.</p>"
    };

    // Masukkan konten detail ke modal
    document.getElementById("modal-body").innerHTML = detailContent[detailId];

    // Tampilkan modal
    const modal = document.getElementById("modal");
    modal.style.display = "block";
}

// Fungsi untuk menutup modal
function closeModal() {
    const modal = document.getElementById("modal");
    modal.style.display = "none";
}
    </script>
</body>
</html>
<?php include 'includes/footer.php'; ?>