<?php
// default login box will be with username
if(!isset($_GET['option'])){
    $_GET['option'] = "user";
}
    

?>

<!DOCTYPE html>
<html lang="en">

<style>
#submit{
        border-radius:10px;
        background-color:lightblue;
        padding:9px;
        width:80px
    }

#submit:hover{
    background-color:lightskyblue
}
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

    #userButton{
        background-color:orange;
        border-radius:15px;
        padding:7px;
        
    }
    #emailButton{
        background-color:lightgreen;
        border-radius:15px;
        padding:7px;
        
    }

    #userButton,#emailButton{
        
        top:0%
    }

    #emailButton:hover{
        background-color:green
    }
    #userButton:hover{
        background-color:darkorange
    }
     #userButton,#emailButton{
         position:relative
     }

</style>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>
    <div id="formContainer">
        <h1>Login</h1>
    <?php 
        //choices for login
    

?>
   <form action="" method="post">
        <input type="hidden" name="" autocomplete="false">
        <?php 
     echo "<a href='index.php?option=user'><button type='button' id='userButton'>Username</button></a>";
    echo "<a href='index.php?option=mailVal'><button type='button' id='emailButton'>Email</button></a><br>";
        
        if($_GET['option'] == 'user'){?>
        <label for="userName">Username</label><br>
        <input type="text" name="userName" 
        <?php 
        // fills in login after signup
        if($_GET){
            
        if(isset($_GET['name'])){
            echo "value='$_GET[name]'";
        }
    }
?>> <?php }else if($_GET['option'] == 'mailVal'){ ?> 
<label for="email">E-mail</label><br>
<input type="text" name="email" id="email" 
        <?php

  
            
        if(isset($_GET['mail'])){
            echo "value='$_GET[mail]'";
        }
    

?>
        
        
    ><?php }?>
<br>

        <label for="password">Password</label><br>
        <input type="text" name="passWord"><br>
        <input id="submit" type="submit" name="login" value="Login!">
    </form>
        <?php  
            echo "Don't have an account? ". "<a href=index.php?signup>Sign up</a>";
        ?>

<?php 
      

?>
 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<script>

var formContain = document.querySelector("#formContainer");
var userForm = document.querySelector("#userForm");
var mailForm = document.querySelector("#emailForm");
var userButton = document.querySelector("#userButton");
var emailButton = document.querySelector("#emailButton");
userButton.addEventListener("click", function(){
    formContain.appendChild(userForm);
    mailForm.remove();
});

emailButton.addEventListener("click", function(){
    formContain.appendChild(mailForm);
    userForm.remove();
});


</script>

 