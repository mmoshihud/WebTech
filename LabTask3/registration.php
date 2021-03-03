<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>

    <h1>Registration</h1>

    <?php
    $validatename = "";
    $validateemail = "";
    $validatecheckbox = "";
    $validateradio = "";
    $validategender = "";
    $validatepassword = "";
    $confirmpassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $cpassword = $_REQUEST["confirmpassword"];


        if (empty($name) || strlen($name) < 3) {
            $validatename = "you must enter valid name";
        } else {
            $validatename = "your name is " . $name;
        }

        if (empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
            $validateemail = "your must enter valid email";
        } else {
            $validateemail = "your email is " . $email;
        }
        if (empty($password) || !preg_match("/(?=.*[@#$%]).*$/", $password)) {
            $validatepassword = "your Password must contain one special character";
        } else {
            $validatepassword = "your email is " . $email;
        }

        if (!isset($_REQUEST["gender"])) {
            $validategender = "Please select your gender";
        }
    }
    ?>
    <form action="control/results.php" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <?php echo $validatename; ?><br><br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <?php echo $validateemail; ?><br><br>
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password">
        <?php echo $validatepassword; ?><br><br>
        <label for="confirmpassword">Confirm Password: </label>
        <input type="text" id="confirmpassword" name="confirmpassword"><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

</body>

</html>