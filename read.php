<?php
    $connect = mysqli_connect('localhost','root','','miniajax');
    $select = "SELECT * FROM user";
    $query = mysqli_query($connect,$select);
    while($row = mysqli_fetch_array($query)){?>
<tr>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><button onclick="Delete(<?php echo $row['id'] ?>)">Delete</button>
        <button onclick="Edit(<?php echo $row['id'] ?>)">Edit</button>
    </td>
</tr>
<?php }
?>