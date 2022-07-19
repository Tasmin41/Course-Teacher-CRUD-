<?php
   include 'config.php';
   $id = $_GET['id'];
   //echo $id;
   $dataFetchQuery = "SELECT * FROM `teacher` WHERE id = '$id'";
   $record = mysqli_query($conn,$dataFetchQuery);
   $data = mysqli_fetch_array($record);
   echo $data['image'] ;
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Teacher</title>
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="font-awesom/css/all.min.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <section class="header-area">
         <div class="container">
            <div class="logo">
               <img src="image/logo-white.png" alt="logo">
               <img class="label" src="image/label-white.png" alt="label">
            </div>
         </div>
      </section>
      <section class="course-teacher">
         <div class="container">
            <div class="top">
               <h2>Update Teacher Information</h2>
               <a class="btn btn-dark" href="index.php"><i class="fa-solid fa-angles-left"></i></a>
            </div>
            <div class="box">
               <form action="updateAction.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                     <label>Faculty Image</label>
                     <input type="file" name="image" class="form-control" value="<?php echo $data['image'] ?>">
                  </div>
                  <div class="mb-3">
                     <img src="<?php echo $data['image'] ?>" width="150px" alt="">
                  </div>
                  <div class="mb-3">
                     <label>Faculty Name</label>
                     <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>">
                  </div>
                  <div class="mb-3">
                     <label>Designation</label>
                     <input type="text" name="designation" class="form-control" value="<?php echo $data['designation'] ?>">
                  </div>
                  <div class="mb-3">
                     <label>Faculty Email</label>
                     <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>">
                  </div>
                  <div class="mb-3">
                     <label>Faculty Phone</label>
                     <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">
                  </div>
                  <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
                  <input class="btn btn-dark" type="submit" name="update" value="update" id="">
               </form>
            </div>
         </div>
      </section>
      <footer class="footer-top">
         <div class="container">
            <h4 class="title">Contact</h4>
            <p>Leading University <br>
               Ragibnagar, South Surma, Sylhet-3112 <br>
               Phone: 01313084499. <br>
               Email: info@lus.ac.bd
            </p>
         </div>
      </footer>
      <footer class="footer-bottom">
         <div class="container">
            <p>
               Copyright 2022 Leading University, all rights reserved. Developed by <span>Tasmin</span>
            </p>
            <p>This site is maintained by Tasmin Begum-1912020187</p>
         </div>
      </footer>
      <script src="bootstrap.min.js"></script>
   </body>
</html>