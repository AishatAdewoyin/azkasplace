<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonticons/css/all.css" />
    <link rel="stylesheet" href="assets/CSS/style.css" />
    <link rel="icon" href="assets/images/AZKA favicon-modified.png" />
    <title>AzkasPlace | Eplicitly Fashionable</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kaushan+Script&family=Metal&family=Nobile:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->

    <section>
        <nav class="navbar">
            <a href="index.php">
                <img src="assets/images/AZKA white bgcropped.png" alt="" class="navbrand" />
            </a>
            <div class="navsocials">
                <ul class="items">
                    <li>
                        <a href="#" class="socialicons">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socialicons">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>


            <button class="navbar-menu" id="tog" type="button">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="navlinks">
                <li>
                    <a href="products.php" class="links">Products</a>
                </li>
                <li>
                    <a href="affiliate.php" class="links">Affiliate</a>
                </li>
                <li>
                    <a href="contact.php" class="links">Contact</a>
                </li>
                <li>
                    <a href="about.php" class="links">About</a>
                </li>
                <li>
                    <a href="register.php" class="links">Register</a>
                </li>
                <li>
                    <a href="login.php" class="links">Login</a>
                </li>
            </ul>
        </nav>
    </section>

    <script>
        document.getElementsById('tog').addEventListener('click', () => {
            document.querySelector('navlinks').classList.toggle('show')
        });
    </script>
</body>