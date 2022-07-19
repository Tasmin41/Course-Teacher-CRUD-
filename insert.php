
<?php
    include 'config.php';

    $image = $_FILES['image'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];


     $imageLocation = $_FILES['image']['tmp_name'];
     $imageName = $_FILES['image']['name'];
     $image_des = "image/".$imageName;
     move_uploaded_file($imageLocation,$image_des);

     $insertQuery = "INSERT INTO `teacher`(`image`, `name`,`designation`, `email`, `phone`) VALUES ('$image_des','$name','$designation','$email','$phone')";

     if(mysqli_query($conn,$insertQuery)){
        //echo "<script>alert('Inserted!!! !!')</script>";
        echo "<script>location.href='index.php'</script>";
     }



     ?>