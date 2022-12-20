<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Contact</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <section class="header">
         <a href="home.php" class="logo">Dolen</a>
         <nav class="navbar">
            <a href="home.php">Beranda</a>
            <a href="about.php">Tentang</a>
            <a href="contact_us.php">Kontak Kami</a>
            <a href="logout.php">Logout</a>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
      </section>
      <!-- Contact Us -->
      <div class="heading fa-align-start row" style="background: url(images/contactUS.png) no-repeat">
        <h1>Contact Us</h1>
      </div>
      <div class="container-fluid pt-lg-5 pb-lg-5" style="background: rgb(213, 209, 209)">
         <div class="container">
            <p class="text-center"></p>
            <h5 class="display-1 text-center" id="kontak">Hubungi Kami</h5>
            <h4 class="text-center">Berikan saran, kritik, dan masukan pada website ini.</h4>
            <form action = "" method = "post">
               <div class="col-md-10">
                  <input class="form-control form-control-lg mb-3" type="text" name = "nama" placeholder="Name" />
                  <input class="form-control form-control-lg mb-3" type="text" name = "email" placeholder="Email" />
                  <input class="form-control form-control-lg mb-3" type="text" name = "nomor" placeholder="No. Phone" />
                  <textarea class="form-control form-control-lg" rows="9" name = "pesan" ></textarea>
               </div>
               <div class="col-md-0 mx-auto text-start">
                  <button type="submit" class="btn btn-danger btn-lg" name = "proses" >Kirim</button>
                  <?php
                     include "config.php";
                     
                     if(isset($_POST['proses'])){
                         mysqli_query($conn,"insert into contact_us set
                         nama = '$_POST[nama]',
                         email = '$_POST[email]',
                         nomor= '$_POST[nomor]',
                         pesan = '$_POST[pesan]' ");
                     }
                     
                     ?>
               </div>
            </form>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   </body>
</html>