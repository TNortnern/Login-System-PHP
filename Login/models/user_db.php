<?php
   

   

    //return an array of categories
    function getAllUsers(){
        global $db;
        $sql = "select * from users";
        //proecedural *************************

        $query = mysqli_query($db, $sql);
        $aryEmploy = mysqli_fetch_all($query, MYSQLI_ASSOC);

        //oop  ******************
        // //$pdoStatement = $db->prepare($sql);
        // //$pdoStatement->execute();

        // $pdoStatement = $db->query($sql);
        // $aryCat = $pdoStatement->fetchAll();

        return $aryEmploy;
    }

    //return an category name from categoryID


function addUser()
{
        global $db;
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $passWord = $_POST['passWord'];
        $admin = $_POST['admin'];
        $userImg = $_FILES['userImg']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES['userImg']['name']);
        move_uploaded_file($_FILES['userImg']['tmp_name'], $target_file);
        $fileName = basename($_FILES['userImg']['name']);





        $qry = "INSERT INTO `users` (`userID`, `username`, `password`, `email`, `userImg`, `admin`) VALUES (NULL, '$userName', '$passWord', '$email', '$userImg', '$admin')";

        $result = mysqli_query($db, $qry);
        if(!$result) {
            die('Query FAILED');
        }
    


}


function updateEmployee($userID)
{
        global $db;
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $passWord = $_POST['passWord'];
        $admin = $_POST['admin'];
        $userImg = $_FILES['userImg']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES['userImg']['name']);
        move_uploaded_file($_FILES['userImg']['tmp_name'], $target_file);
        $fileName = basename($_FILES['userImg']['name']);

        // if(empty($employeeFName)){
        //     echo "empty!!";
        // }
        // else{
        //     $mod = 1;
        //     echo "ADDED!!";
        // }
        $qry = "UPDATE `users` SET `username` = '$userName', `password` = '$passWord', `email` = '$email', `userImg` = '$userImg', `admin` = '$admin' WHERE `users`.`userID` = $userID";

        $result = mysqli_query($db, $qry);
        if(!$result) {
            die('Query FAILED');
        } 
    


}


function deleteUser($userID)
{
    global $db;


    $qry =  "DELETE FROM `users` WHERE `users`.`userID` = '$userID'";

    $result = mysqli_query($db, $qry);
    if(!$result) {
        die('Query FAILED' . mysqli_error($db));
    } 
    


}


function getUser($userID){
   
 global $db;
    $sql = "select * from users where userID = $userID Limit 1";

    $qry = mysqli_query($db, $sql);
    $rs = mysqli_fetch_assoc($qry);



    return $rs;
    }




