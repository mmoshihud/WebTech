<!DOCTYPE html>
<html>

<head>
    <title>Result</title>
</head>

<body>
    <h1>This is a Heading</h1>
    <p>This is a paragraph.</p>
    <?php

    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];

    if (empty($name)) {
        echo "You must enter name";
    }
    echo "You are " . $name, "<br>";
    echo "Your email is " . $email;
    ?>

</body>

</html>