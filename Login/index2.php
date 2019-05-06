<?php
session_start();
$un = $_SESSION['username'];
$ue = $_SESSION['email'];
// checks to see if user is logged in
if($_SESSION['valid'] != "true"){
    header("Location: ./index.php?nli");
}
// proper spacing for whatever the user used to log in
if(!empty($_SESSION['email'])){
echo "<div style='position:absolute; top:2%; right:16; font-size:20px; z-index:100000000000000000000'>";
}
else{
    echo "<div style='position:absolute; top:2%; right:4%; font-size:20px; z-index:100000000000000000000'>";
}
// static message
echo "Hello, " . $_SESSION['username'] . $_SESSION['email'];
echo "<a href=index.php?logout>Log out</a>";
echo "</div>";
include "Cheech-s-Pizza-3/index.php";

?>

