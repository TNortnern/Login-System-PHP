<!DOCTYPE html>
<html lang="en">
<style>
    #formContainer{
        display:flex;
        flex-direction:column;
        align-items:center;
        
    }
    form{
        border:2px gray solid;
        padding:50px;
    }
    h1{
        border-bottom:3px gray solid
    }

    #submit{
        border-radius:10px;
        background-color:lightblue;
        padding:9px;
        width:80px
    }

#submit:hover{
    background-color:lightskyblue
}
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Register</title>
</head>

<body>
    <div id="formContainer">
    <h1>Register</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="" autocomplete="false">
        <label for="userName">Username</label><br>
        <input type="text" name="userName" 
        <?php 
        if(!isset($_GET['name'])){
            $_GET['name'] = NULL;
        }
        $name = $_GET['name'];
        if($_GET){
        if(isset($name)){
            echo "value='$name'";
        }
    }
        ?>><br>
        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email" 
        <?php
        if(!isset($_GET['mail'])){
            $_GET['mail'] = NULL;
        }
          $email = $_GET['mail'];
        if($_GET){
        if(isset($email)){
            echo "value='$email'";
        }
    }
 ?>><br>
        <label for="password">Password</label><br>
        <input type="text" name="passWord"><br>
        <label style="color:green; font-weight:bold;" for="userImg">Upload a image that describes you!</label><br>
        <input type="file" name="userImg"><br>
        <input id="submit" type="submit" name="register" value="Sign Up!"><br>
        <?php
       echo "Already have an account? ". "<a href=index.php?login>Login</a>";
        ?>
    </form>

    <?php


    ?>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>