<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Ajax Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Ajax Mini Project</h1>
        <input type="text" id="name" placeholder="enter name.."><br>
        <input type="email" id="email" placeholder="enter email.."><br>
        <input type="password" id="password" placeholder="enter password.."><br>
        <button class="btn">Insert Data</button><br>
        <button class="readbtn">Read Data</button>
        <h1>Read Data From Database</h1>
        <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="ajax.js"></script>

</html>