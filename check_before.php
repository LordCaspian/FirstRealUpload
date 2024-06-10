<?php
?>
<!DOCTYPE HTML>
<html lang="">
<head>
    <title></title>
</head>
<body>

<h2>PHP Form Example</h2>
<form method="post">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php

  echo "<h2>Your Input:</h2>";
  echo "Name: " . $_POST["name"] . "<br>";
  echo "E-mail: " . $_POST["email"] . "<br>";
  echo "Website: " . $_POST["website"] . "<br>";
  echo "Comment: " . $_POST["comment"] . "<br>";
  echo "Gender: " . $_POST["gender"] . "<br>";
?>

</body>
</html>
