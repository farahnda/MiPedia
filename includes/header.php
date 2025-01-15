<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiPedia - Semua tentang Mi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <style>
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .username {
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 4px;
            color: #748DB9;
            font-weight: bold;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 4px;
            right: 0;
        }

        .dropdown-content .logout-link {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content .logout-link:hover {
            background-color: #f1f1f1;
            border-radius: 4px;
            color: #ff4444;
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="assets/img/logo.png" alt="MiPedia Logo" class="navbar-logo"> 
            </div>
            <ul class="nav-links"> 
                <li><a href="#home">Home</a></li>
                <li><a href="#sejarah">Sejarah</a></li>
                <li><a href="#jenis-jenis">Jenis-Jenis</a></li>
                <li><a href="#resep">Resep</a></li>
            </ul>
            <?php
            session_start();
            if(isset($_SESSION['user_id'])) {
                echo '<div class="user-dropdown">
                        <div class="username">Halo, ' . htmlspecialchars($_SESSION['username']) . '!</div>
                        <div class="dropdown-content">
                            <a href="logout.php" class="logout-link">Logout</a>
                        </div>
                      </div>';
            } else {
                echo "<a href='login.php'><button class='contact-btn'>Login</button></a>";
            }
            ?>
        </nav>
    </header>
</body>
</html> 