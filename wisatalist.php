<?php include 'config.php';
   session_start();?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Wisata</title>
      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css" />
   </head>
   <body>
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
      <div class="heading text-start row" style="background: url(images/header-bg-2.png) no-repeat">
         <h1>DESTINASI ANDA</h1>

      </div>
      <?php 
         include 'config.php';
         ?>
      <?php 
         if(isset($_GET['cari'])){
         	$cari = $_GET['cari'];
         		$cari = $_GET['cari'];
         		$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from wisata where nama like '%".$cari."%'"));
               ?>
      <div class="extend-container">
         <br>
         <div class="container text-center col-lg-10">
            <br>
            <div class="card bg-secondary">
            <div class="input-group text-center">
                  <form action="wisatalist.php" method="get">
                  <input class="form-control form-control-lg mb-3" type="text" name = "cari" placeholder="Search" />
                     <button type="submit" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                  </button>
                  </form>
               </div>
            </div>
            <div class="card bg-secondary">

               <div class="card-body">
                  <table class="table">
                     <tbody>
                        <tr>
                           <section class="packages">
                              <div class="box-container">
                                 <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- menampilkan data dengan menggunakan array  -->
                                    <?php 
                                       $sql = "SELECT * FROM `wisata`";
                                       
                                       $res = mysqli_query($conn, $sql);
                                       
                                       $count = mysqli_num_rows($res);
                                       
                                       if($count>0){
                                           ?>
                                    <div class="col">
                                       <div class="card h-100">
                                          <img src="<?php echo $data['img']; ?>" class="card-img-top" alt="">
                                          <div class="card-body">
                                             <div class="content">
                                                <h3><?php echo $data['nama']; ?></h3>
                                                <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal<?php echo $data['id']; ?>">Selengkapnya</a>
                                                <div class="modal fade" id="modal<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                               aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="box">
                                                               <div class="image">
                                                                  <img src="<?php echo $data['img']; ?>" alt="" />
                                                               </div>
                                                               <div class="content">
                                                                  <h3><?php echo $data['nama']; ?></h3>
                                                                  <p><?php echo $data['keterangan']; ?></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                            <a href="<?php echo $data['booking']; ?>" role="button" class="btn btn-secondary">Booking Now</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php
                                       }else{
                                       //not available data
                                       echo "<div class = 'error'> Nothing List.</div>";
                                       }
                                       ?>
                                 </div>
                              </div>
               </div>
               </section>
               <td>
               </td>
               </tr>
               <?php  ?>
               </tbody>
               </table>
            </div>
         </div>
      </div>
      <?php		
         }else{
            ?>
      <div class="extend-container">
         <br>
         <div class="container text-center col-lg-10">
            <br>
            <div class="card bg-secondary text-center">
            <div class="input-group text-center">
                  <form action="wisatalist.php" method="get">
                  <input class="form-control form-control-lg mb-3" type="text" name = "cari" placeholder="Search" />
                     <button type="submit" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                  </button>
                  </form>
               </div>
            </div>
            <div class="card bg-secondary">
               <div class="card-body">
                  <table class="table">
                     <tbody>
                        <tr>
                           <section class="packages">
                              <div class="box-container">
                                 <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <!-- menampilkan data dengan menggunakan array  -->
                                    <?php 
                                       //$search = $_POST['search'];
                                       
                                       $sql = "SELECT * FROM `wisata`";
                                       
                                       $res = mysqli_query($conn, $sql);
                                       
                                       $count = mysqli_num_rows($res);
                                       
                                       if($count>0){
                                         //available data
                                         while($row = mysqli_fetch_assoc($res)){
                                           $id = $row['id'];
                                           $nama = $row['nama'];
                                           $keterangan = $row['keterangan'];
                                           $image = $row['img'];
                                           $booking = $row['booking'];
                                           ?>
                                    <div class="col">
                                       <div class="card h-100">
                                          <img src="<?php echo $image; ?>" class="card-img-top" alt="">
                                          <div class="card-body">
                                             <div class="content">
                                                <h3><?php echo $nama ?></h3>
                                                <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal<?php echo $row['id']; ?>">Selengkapnya</a>
                                                <div class="modal fade" id="modal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                               aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                         </div>
                                                         <div class="modal-body">
                                                            <div class="box">
                                                               <div class="image">
                                                                  <img src="<?php echo $row['img']; ?>" alt="" />
                                                               </div>
                                                               <div class="content">
                                                                  <h3><?php echo $nama; ?></h3>
                                                                  <p><?php echo $keterangan; ?></p>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                            <a href="<?php echo $booking; ?>" role="button" class="btn btn-secondary">Booking Now</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php
                                       }
                                       }else{
                                       //not available data
                                       echo "<div class = 'error'> Nothing List.</div>";
                                       }
                                       ?>
                                 </div>
                              </div>
               </div>
               </section>
               <td>
               </td>
               </tr>
               <?php  ?>
               </tbody>
               </table>
            </div>
         </div>
      </div>
      <?php
         }
         ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
         integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      </div>
   </body>
</html>
