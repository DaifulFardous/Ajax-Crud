<?php
    $connect = mysqli_connect('localhost','root','','miniajax');
    $id = $_GET['id'];
    $select = "SELECT * FROM user WHERE id = $id";
    $query = mysqli_query($connect,$select);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>

<body>
    <div class="container">
        <h1>Ajax Mini Project</h1>
        <input type="text" id="name" placeholder="enter name.." value="<?php echo $row['name'] ?>"><br>
        <input type="email" id="email" placeholder="enter email.." value="<?php echo $row['email'] ?>"><br>
        <input type="text" id="password" placeholder="enter password.." value="<?php echo $row['password'] ?>"><br>
        <button class="editbtn" onclick="UpdateData(<?php echo $row['id'] ?>)">Update Data</button><br>
        <button class="editbtn" onclick="home()">HOME</button><br>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="ajax.js"></script>

</html>