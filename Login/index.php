<?php
include "models/database.php";

include "models/signupdb.php";

include "models/logindb.php";

session_start();
?>
<style>
    p{
        text-align:center;
        font-weight:bold;
        font-size:30px
    }
    h3{
        text-align:center
    }
</style>
<?php
// account created message
if(isset($_GET['ac'])){
    echo "<h3>Account created successfully! An confirmation e-mail has been sent to $_GET[mail].</h3>";
}
if(isset($_GET['nli'])){
    echo "<h3>You must login to advance to the website.</h3>";
}
$userID = filter_input(INPUT_GET, 'use');
$error = filter_input(INPUT_GET, "e");
// if not signup
if(!isset($_GET['signup'])){
include "./views/login.php";
}
else{
include "./views/register.php";
}
 if (isset($_POST['register'])) {
     registerUser();
 }


if(isset($_POST['login'])){
    userLogin();
}

if(isset($_GET['logout'])){
    $_SESSION = array();
    session_destroy();
}
// error checking
if($error == "inv"){
    echo "<p>Invalid username or password.</p>";
}
elseif($error == "ude"){
    echo "<p>User doesn't exists, click <a href=index.php?signup>here</a> to sign up.</p>";
}
elseif($error == "emp"){
    echo "<p><span style='color:red'>ERROR:</span>One or more fields were left empty.</p>";
}
elseif($error == "ee"){
    echo "<p>The e-mail has already been registered.</p>";
}
elseif($error == "ue"){
    echo "<p>The username has already been registered.</p>";
}
elseif($error == "be"){
    echo "<p>The username and e-mail have been taken.</p>";
}
elseif($error == "mail"){
    echo "<p><span style='color:red'>Invalid e-mail format</span> Proper format: <i>name@yahoo.com</i>";
}



?>