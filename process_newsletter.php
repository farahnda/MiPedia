<?php
require_once 'config.php';

if (isset($_POST['subscribe'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    
    try {
        // Simpan ke database
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
        
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>
                    alert('Terima kasih telah berlangganan newsletter kami!');
                    window.location.href='index.php';
                  </script>";
        } else {
            throw new Exception("Error: " . mysqli_error($koneksi));
        }
        
    } catch (Exception $e) {
        echo "<script>
                alert('Terjadi kesalahan: " . $e->getMessage() . "');
                window.location.href='index.php';
              </script>";
    }
}
mysqli_close($koneksi);
?>
