<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Profile Owner</title>
    <link rel="icon mbah kakung" href="image/favicon_io/favicon.ico">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>

        <!-- Navbar -->
        <nav id="navbar-profile" class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
                
                <!-- LOGO NAVBAR -->
                <a class="navbar-brand" href="#">
                    <img id="logo" src="image/LogoMbahkakung.png" alt="">
                </a>

                <!-- NAVBAR TOGGLER -->
                <!-- Muncul saat ukuran layar kecil (mobile) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU NAVBAR -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="profile.php">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="menu.php">DAFTAR MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>

    </header>

    <main>
        <!-- Content -->
        <div id="profile" class="container my-5">
            <div class="row">
                <div class="col">
                    <h1 class="judul-profile">Kenalan Sama Owner Mbah Kakung!</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="profile-text py-3">Owner : Sumarno / Pak Nung</p>
                        <p class="profile-text" align="justify">
                            Beliau ini, membuat mbah kakung, dengan motivasi
                            yang cukup besar, dengan memiliki basic dibidang
                            perkulineran, beliau juga merekap seluruh jajaran 
                            organisasi untuk masa pandemi Covid-19. </p>
                        <p class="profile-text">Contohnya seperti :</p>
                        <ul class="profile-text">
                            <li>Barista</li>
                            <li>Kitchen</li>
                            <li>etc</li><br>
                        </ul>
                        <div class="col">
                        <h3 class="judul-profile">Visi & Misi Mbah Kakung</h3>
                        <p class="profile-text" align="justify">Visi : <br>
                            Visi dari mbah kakung itu sendiri adalah, kita ingin mempunyai
                            outlet, sebanyak mungkin dan juga difokuskan pertama kali adalah
                            pulau jawa itu sendiri
                        </p>
                        <p class="profile-text" align="justify">Misi : <br>
                            Misi dari mbah kakung itu sendiri adalah mampu membuka
                            sebuah lowongan pekerjaan, baik dibidang kuliner, kasir,
                            barista, dan lain-lain. Untuk orang yang membutuhkan.
                        </p>
                    </div>
                    </div>
                    <div class="col">
                        <img src="image/owner.jpeg" class="owner-image py-2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container text-center py-3">
            <span class="text-muted">&copy; Mbah Kakung, All Right Reserved 2022</span>
        </div>
    </footer>
    <!-- BOOTSTRAP BUNDLE JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>