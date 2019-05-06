<h1>Hello WOrld</h1>

<?php

$userID = $_POST['theID'];
deleteUser($userID);
header("Location:index3.php?mod=d&n=$_GET[nm]");
?>