<?php include "controller/database.php"; ?>
<?php include "validate.php"; ?>

<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <h1>Change Password</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br><br>
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password"><br><br>
        <label for="confirmpassword">Confirm Password: </label>
        <input type="text" id="confirmpassword" name="confirmpassword"><br><br>
        <label for="gender">Gender:</label><br><br>
        <label for="male">Male</label>
        <input type="radio" id="male" name="male" value="male"><br>
        <label for="female">Female</label>
        <input type="radio" id="female" name="female" value="female"><br>
        <label for="other">Other</label>
        <input type="radio" id="other" name="other" value="other"><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>
        <label for="fileUpload">Upload File</label>
        <input type="file" name="fileUpload"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <img src="<?php echo $target_file ?>" alt="">
</body>

</html>