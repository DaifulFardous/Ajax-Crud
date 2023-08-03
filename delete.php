<?php
    $connect = mysqli_connect('localhost','root','','miniajax');
    $id = $_POST['id'];
    $del = "DELETE FROM user WHERE id = $id ";
    $query = mysqli_query($connect,$del);
    if($query){
        echo "Deleted successfully";
    }else{
        echo "Failed to delete";
    }
?>