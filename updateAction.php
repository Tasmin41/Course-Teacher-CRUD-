<?php

    include 'config.php';
    $id = $_POST['id'];
    $image = $_FILES['image'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
   

    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $image_des = "image/".$imageName;
    move_uploaded_file($imageLocation,$image_des);

     $updateQuery = "UPDATE `teacher` SET `image`='$image_des',`name`='$name',`designation`='$designation',`email`='$email',`phone`='$phone' WHERE id='$id'";

     if(mysqli_query($conn,$updateQuery)){
        echo "<script>alert('Updated!!! !!')</script>";
        echo "<script>location.href='index.php'</script>";
     }else{
        echo "<script>alert('not Updated!!! !!')</script>";
     }
 