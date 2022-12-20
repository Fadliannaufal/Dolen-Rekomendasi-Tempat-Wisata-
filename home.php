<?php 
   include 'config.php';
   session_start();
   
   if (!isset($_SESSION['username'])) {
       header("Location: index.php");
   }
    
           $getdata = mysqli_query($conn, "SELECT * FROM `wisata` WHERE id = '1' ");
           $singledata = mysqli_fetch_array($getdata);
           $getdata2 = mysqli_query($conn, "SELECT * FROM `wisata` WHERE id = '2' ");
           $singledata2 = mysqli_fetch_array($getdata2);
           $getdata3 = mysqli_query($conn, "SELECT * FROM `wisata` WHERE id = '3' ");
           $singledata3 = mysqli_fetch_array($getdata3);
           $iDdata = "";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>home</title>
      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
      <!-- home section starts  -->
      <section class="home">
         <div class="swiper home-slider">
         <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/bghome2.png) ">
            <div class="content">
               <span>happy with</span>
               <h3>Dolen cari wisata</h3>
               <a href="wisatalist.php" class="btn">cari</a>
               <?php echo "<span>Hello " . $_SESSION['username'] ."!". "</span>"; ?>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/bghome1.jpg) ">
            <div class="content">
               <span>happy with</span>
               <h3>Dolen cari wisata</h3>
               <a href="wisatalist.php" class="btn">cari</a>
               <?php echo "<span>Hello " . $_SESSION['username'] ."!". "</span>"; ?>
            </div>
         </div>
      </section>
      <!-- home section ends -->
      <section class="home-packages">
         <h1 class="heading-title"> wisata </h1>
         <div class="box-container">
            <div class="box">
               <div class="image">
                  <img src=<?php echo $singledata['img']?> alt="">
               </div>
               <div class="content">
                  <?php
                     echo "<h3> " . $singledata['nama']. "</h3>";
                     ?>
                                    <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example1">Selengkapnya</button>

               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="<?php echo $singledata2['img']?>" alt="">
               </div>
               <div class="content">
                  <?php
                     echo "<h3> " . $singledata2['nama']. "</h3>";
                     ?>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example2">Selengkapnya</button>
               </div>
            </div>
            <div class="box">
               <div class="image">
                  <img src="<?php echo $singledata3['img']?>" alt="">
               </div>
               <div class="content">
                  <?php
                     echo "<h3> " . $singledata3['nama']. "</h3>";
                     ?>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example3">Selengkapnya</button>
               </div>
            </div>
         </div>
      </section>
      <section class="home-offer">
         <div class="content">
            <h3>cari tempat healing!</h3>
            <p>Website rekomendasi tempat wisata adalah website yang mengarah pada bidang pariwisata, dimana pada web
               menyediakan beberapa rekomendasi dari tempat wisata yang diinginkan berdasarkan pada pencarian yang sudah
               dilakukan oleh pengguna. Pada website ini pengguna akan dapat mengetahui apa saja wisata yang disarankan
               oleh sistem beserta dengan deskripsi tempat, lokasi wisata, review pengunjung, pembookingan pada sebagian
               objek wisata dan keterangan lainnya.
            </p>
            <a href="#" class="btn">cari lainnya</a>
         </div>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="example1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">DETAIL WISATA</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="box">
                     <div class="image">
                        <img src=
                           <?php 
                                 echo $singledata['img'];
                              ?> alt="">
                     </div>
                     <div class="content">
                        <?php
                            echo "<h3> " . $singledata['nama'] . "</h3>";
                            echo "<p>" . $singledata['keterangan'] . "<p>";
                           ?>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <a href=<?php echo $singledata['booking'] ?>  role="button" class="btn btn-secondary">Booking Now</a>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="example2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">DETAIL WISATA</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="box">
                     <div class="image">
                        <img src=
                           <?php 
                                 echo $singledata2['img'];
                              ?> alt="">
                     </div>
                     <div class="content">
                        <?php
                            echo "<h3> " . $singledata2['nama'] . "</h3>";
                            echo "<p>" . $singledata2['keterangan'] . "<p>";
                           ?>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <a href=<?php echo $singledata2['booking'] ?>  role="button" class="btn btn-secondary">Booking Now</a>
               </div>
            </div>
         </div>
      </div>
      
      <div class="modal fade" id="example3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">DETAIL WISATA</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="box">
                     <div class="image">
                        <img src=
                           <?php 
                                 echo $singledata3['img'];
                              ?> alt="">
                     </div>
                     <div class="content">
                        <?php
                            echo "<h3> " . $singledata3['nama'] . "</h3>";
                            echo "<p>" . $singledata3['keterangan'] . "<p>";
                           ?>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <a href=<?php echo $singledata3['booking'] ?>  role="button" class="btn btn-secondary">Booking Now</a>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <!-- swiper js link  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      <!-- custom js file link  -->
      <script src="js/script.js"></script>
   </body>
</html>