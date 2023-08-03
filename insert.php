<?php
    $connect = mysqli_connect('localhost','root','','miniajax');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $insert = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
    $query = mysqli_query($connect,$insert);
    if($query){
        echo "Data insert successfully";
    }else{
        echo "Failed to insert data";
    }
?>