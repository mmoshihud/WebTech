<!DOCTYPE html>
<html>

<head>
<title>Registration Form</title>
</head>

<body>

<h1>Registration</h1>

<form>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email"><br><br>
  <label for="username">User Name:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="text" id="password" name="password"><br><br>
  <label for="gender">Gender:</label>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br><br>

  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form>

</body>
</html>
