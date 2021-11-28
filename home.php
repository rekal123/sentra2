<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Makan REKAL</title>
    <link rel="stylesheet" href="reckl.css">
    <link rel="shortcut icon" type="images/x-icon" href="/favicon.ico">
    <link rel="icon" type="images/favicon.ico" href="image/x-icon">
    
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Warung Rekal</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="daftar_masakan.php">Daftar masakan</a></li>
                    <li><a href="cetring.php">ketring</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
                </ul>
            </nav>
        </header>
        <section class="courses">
            <article>
                <figure>
                    <img src="logo.jpg" alt="logo" width="200px">
                    <figcaption>Warung-Rekal</figcaption>
                </figure>
                <hgroup>
                    <h2>Warung rekal</h2>
                    <h3>Tempat Pengumpulan Dana</h3>
                </hgroup>
                <p>Tempat dimana anda bisa memesan makanan dan membantu sigesfo dalam mengumpulkan dana.</p>
            </article>
            <article>
                <figure>
                     <img src="warung.jpg" alt="warung" width="200px">
                    <figcaption>Nasi Padang Indonesia</figcaption>
                </figure>
                <hgroup>
                    <h2>Nasi Padang</h2>
                    <h3>Makanan Campur</h3>
                </hgroup>
                <p>Nasi padang adalah makanan khas indonesiayang berupa sejenis campuran kuah dengan lauk</p>
            </article>
            <article>
                <figure>
                    <img src="rendang.jpg" alt="rendang">
                    <figcaption>Rendang Indonesia</figcaption>
                </figure>
                <hgroup>
                    <h2>Masakan Rendang</h2>
                    <h3>Masakan Rendang dengan indofoot rendang</h3>
                </hgroup>
                <p>Rendang adalah makanan yang menggunakan indofoot rendang sebagai bahan utamanya yang di campur daging</p>
            </article>
        </section>
        <aside>
            <section class="popular-recipes">
                <h2>Masakan populer</h2>
                <a href="#">Nasi Kuning</a>
                <a href="#">Bubur</a>
                <a href="#">Geprek</a>
            </section>
            <section class="contact-details">
            <h2>kontak</h2>
            <p>Warung Rekal <br>
            Hanya tersedia di kota bambu <br>
            cp      : +6288808981710 <br>
            Email   : rekalkobam@gmail.com </p>
        </section>
        </aside>
        <footer>
            &copy; 2021 Warung Rekal
        </footer>
    </div>

 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
 
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="rekalll.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">WB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
 
    
 
  </div>
</nav>
 
<main role="main" class="container">
 
  <div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
    <p class="lead">Belajar PHP Sangat Menyenangkan</p>
  </div>
 
</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>