<?php
        $connect = mysqli_connect('localhost','root','','miniajax');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $update = "UPDATE user SET name = '$name', email = '$email', password = '$password' WHERE id = $id";
        $query = mysqli_query($connect,$update);
        if($query){
            echo "Data updated";
        }else{
            echo "Failed to update data";
        }
?>