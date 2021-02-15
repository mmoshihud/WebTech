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
    $v1 = $v2 = $v3 = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];

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

        if (!isset($_REQUEST["vehicle1"]) && !isset($_REQUEST["vehicle2"]) && !isset($_REQUEST["vehicle3"])) {
            $validatecheckbox = "please select at least one checkbox";
        } else {
            if (isset($_REQUEST["vehicle1"])) {
                $v1 = $_REQUEST["vehicle1"];
            }
            if (isset($_REQUEST["vehicle2"])) {
                $v2 = $_REQUEST["vehicle2"];
            }
            if (isset($_REQUEST["vehicle3"])) {
                $v3 = $_REQUEST["vehicle3"];
            }
        }

        if (!isset($_REQUEST["gender"])) {
            $validategender = "Please select your gender";
        }
    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
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