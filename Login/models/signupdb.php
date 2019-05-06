<?php

function registerUser()
{
    global $db;

    $userName = filter_input(INPUT_POST, 'userName');
    $passWord = filter_input(INPUT_POST, 'passWord');
    $email = filter_input(INPUT_POST, 'email');
    $admin = filter_input(INPUT_POST, 'admin');
    $userImg = $_FILES['userImg']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['userImg']['name']);
    move_uploaded_file($_FILES['userImg']['tmp_name'], $target_file);
    $fileName = basename($_FILES['userImg']['name']);
    $checkemail = "SELECT * FROM users WHERE email = '$email'";
    $checkname = "SELECT * FROM users WHERE username = '$userName'";

    // checks to see if email exists
    if (mysqli_num_rows($db->query($checkemail)) > 0) {
        header("Location:index.php?e=ee&name=$userName&signup");
        exit();
    }
    //checks to see if username exists
    else if (mysqli_num_rows($db->query($checkname)) > 0) {
        header("Location:index.php?e=ue&mail=$email&signup");
        exit();
    }
    //checks to see if both exists
    else if (mysqli_num_rows($db->query($checkemail)) > 0 && mysqli_num_rows($db->query($checkname)) > 0) {
        header("Location:index.php?e=be&signup");
        exit();
    }
    //checks for empty fields
    else if (empty($userName) || empty($passWord) || empty($email)) {
        header("Location:index.php?e=emp&signup");
        exit();
        //checks for proper email format
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:index.php?e=mail&name=$userName&mail=$email&signup");
        exit();
        // if no errors, create the account
    } else {
        $qry = "INSERT INTO `users` (`userID`, `username`, `password`, `email`, `userImg`, `admin`) VALUES (NULL, '$userName', '$passWord', '$email', '$userImg', 'No')";
        $result = mysqli_query($db, $qry);
        if (!$result) {
            die('Query FAILED' . mysqli_error($db));
        }
        header("Location:index.php?ac&name=$userName&mail=$email");
    }

}
