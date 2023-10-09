<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form php/mysql</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Form</h2>
  <form action="consult.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email">
    <input type="text" name="message" placeholder="Enter your message">
    <input type="submit" name="submit" value="Submit">
    <?php
      if(isset($_GET['ok'])) {
      echo "<p>Message sent<p>"; }  ?>
  </form>


</body>
</html>