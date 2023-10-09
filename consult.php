<?php
$conex_bd = mysqli_connect("Server", "Username", "Password","Database") or exit ('Error');
$Name = $_POST["name"];
$Email = $_POST["email"];
$Message = $_POST["message"];
mysqli_query($conex_bd, "INSERT INTO consult VALUES (DEFAULT, '$Name', '$Email', '$Message')");
mysqli_close($conex_bd);
header("Location: index.php?ok");
?>