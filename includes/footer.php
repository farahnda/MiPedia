<style>
    .footer-section ul {
        list-style: none !important;
        font-weight: bold;
        padding: 0;
        margin: 0;
    }
    
    .newsletter-form {
        margin-top: 15px;
    }
    
    .newsletter-form input[type="email"] {
        padding: 8px;
        width: 200px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-right: 5px;
    }
    
    .newsletter-form button {
        padding: 8px 15px;
        background: #748DB9;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .newsletter-form button:hover {
        background: #5a6f94;
    }
    
    .footer-section ul li {
        margin-bottom: 8px;
    }
    
    .footer-section ul li a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }
    
    .footer-section ul li a:hover {
        color: #748DB9;
    }
</style>
<footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>MiPedia</h3>
                <p>Semua tentang mi ada disini!</p>
                <form action="process_newsletter.php" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="Masukkan email Anda" required>
                    <button type="submit" name="subscribe">Berlangganan</button>
                </form>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p>Email: <a href="mailto:info.mipedia@gmail.com">info@mipedia.com</a></p>
                <p>Tel: +62 123 456 789</p>
            </div>
            <div class="footer-section">
                <h3>Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MiPedia. All rights reserved.</p>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>