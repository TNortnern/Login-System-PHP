<?php
function userLogin()
{
    global $db;
    $userName = filter_input(INPUT_POST, 'userName');
    $passWord = filter_input(INPUT_POST, 'passWord');
    $email = filter_input(INPUT_POST, 'email');
    $option = filter_input(INPUT_GET, 'option');
    if(!isset($option)){
    $option = "user";
    }

    if (empty($userName) && empty($email) || empty($passWord)) {
        header("Location:index.php?e=emp&option=$option&mail=$email&name=$userName");
        exit();
    } else {
        $sqlPass = "SELECT * FROM users WHERE username= '$userName' AND `password` = '$passWord' OR email= '$email' AND `password` = '$passWord'";
        $sqlExists = "SELECT * FROM users WHERE username= '$userName' OR email= '$email'";
        $sqlAdmin = "SELECT * FROM users WHERE username= '$userName' AND `admin` = 'Yes'";

        // checks if user or email exists
        $usermatch = mysqli_num_rows($db->query($sqlPass));
        $userexists = mysqli_num_rows($db->query($sqlExists));
        $useradmin = mysqli_num_rows($db->query($sqlAdmin));
        // checks if the username or email even exists
        if ($userexists > 0) {
            // if password exists with email or username then create a session
            if ($usermatch > 0) {
                session_start();
                $_SESSION['username'] = $userName;
                $_SESSION['email'] = $email;
                $_SESSION['valid'] = "true";
                // if user is an admin take them to the manager else to the pizza site
                if($useradmin > 0){
                    header("Location:index3.php?us=$userName");
                    exit();
                }else{
                    header("Location:index2.php?us=$userName");
                    exit();
                }
                // if user exists but password is incorrect
            } if ($usermatch == 0) {
                header("Location:index.php?e=inv&option=$option&mail=$email&name=$userName");
                exit();
            }
            // user doesn't exist
        } else {
            header("Location:index.php?e=ude&option=$option");
            exit();
        }
    }
}
