<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Faculty Member</title>
      <link rel="stylesheet" href="bootstrap.min.css">
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
               <h2>Faculty Members Of CSE</h2>
               <a href="create_teacher.php" class="btn btn-dark">Add Member</a>
            </div>
            <div class="box">
               <div class="table-responsive-lg">
                  <table class="table table-hover table-striped">
                     <thead>
                        <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Image</th>
                           <th scope="col">Name</th>
                           <th scope="col">Designation</th>
                           <th scope="col">email</th>
                           <th scope="col">phone</th>
                           <th scope="col">Update</th>
                           <th scope="col">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           include 'config.php';
                           $allData = mysqli_query($conn,"SELECT * FROM `teacher`");
                           while($row=mysqli_fetch_array($allData)){
                               echo "<tr>
                                    <td>$row[id]</td>
                                   <td><img src='$row[image]' alt='student Image' width='100px'height='100px'></td>
                                   
                                   <td>$row[name]</td>
                                   <td>$row[designation]</td>
                                   <td>$row[email]</td>
                                   <td>$row[phone]</td>
                                   
                                   <td><a class='btn btn-dark' href='update.php?id=$row[id]'>Update</a></td>
                                   <td><a class='btn btn-dark' href='delete.php?id=$row[id]'>Delete</a></td>
                               </tr>";     
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
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