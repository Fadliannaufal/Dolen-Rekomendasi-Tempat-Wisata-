<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>about</title>
      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <!-- header section starts  -->
      <section class="header">
         <a href="home.php" class="logo">Dolen</a>
         <nav class="navbar">
            <a href="home.php">Beranda</a>
            <a href="about.php">Tentang</a>
            <a href="contact_us.php">Kontak kami</a>
            <a href="logout.php">Logout</a>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
      </section>
      <!-- header section ends -->
      <div class="heading fa-align-start col text-start" style="background:url(images/aboutus.png) no-repeat">
         <h1>Tentang kami</h1>
      </div>
      <!-- about section starts  -->
      <section class="about">
         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>
         <div class="content">
            <h3>why choose us?</h3>
            <p>Website rekomendasi tempat wisata adalah website yang mengarah pada bidang pariwisata. Website "Dolen" menyediakan beberapa penawaran mengenai rekomendasi destinasi wisata. </p>
            <p>Pada website "Dolen", pengguna akan mengetahui apa saja top destinasi wisata yang disarankan oleh sistem dengan harga terjangkau, dan layanan service 24 jam.</p>
            <div class="icons-container">
               <div class="icons">
                  <i class="fas fa-map"></i>
                  <span>destinasi terbaik</span>
               </div>
               <div class="icons">
                  <i class="fas fa-hand-holding-usd"></i>
                  <span>harga terjangkau</span>
               </div>
               <div class="icons">
                  <i class="fas fa-headset"></i>
                  <span>layanan service 24 jam</span>
               </div>
            </div>
         </div>
      </section>
      <!-- about section ends -->
      <section class="reviews">
         <h1 class="heading-title">Anggota Kami</h1>
         <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
               <div class="swiper-slide slide">
                  <h3>M. Alimul Fadli An Naufal</h3>
                  <span>Ketua</span>
                  <img src="images/fadli.jpg" alt="">
               <h5>follow us</h5>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               </div>
               <div class="swiper-slide slide">
                  <h3>Oktania Arlingga Wilujeng</h3>
                  <span>Anggota 1</span>
                  <img src="images/okta.webp" alt="">
               <h5>follow us</h5>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               </div>
               <div class="swiper-slide slide">
                  <h3>Nurun Nafisah</h3>
                  <span>Anggota 2</span>
                  <img src="images/nurun.png" alt="">
               <h5>follow us</h5>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               </div>
               <div class="swiper-slide slide">
                  <h3>Shifly Inner Beauty</h3>
                  <span>Anggota 3</span>
                  <img src="images/shifly.jpeg" alt="">
               <h5>follow us</h5>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               </div>
            </div>
         </div>
      </section>
      <!-- swiper js link  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      <!-- custom js file link  -->
      <script src="js/script.js"></script>
   </body>
</html>