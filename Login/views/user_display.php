<style>
.userimg{
    width:300px;
    height:300px;
}
</style>
<?php
$user = getUser($_GET['use']);

?>

<div style="float:right;margin-right:20px;padding:25px">   
<p>Username:<?php echo $user['username']; ?> </p>
<p>Image:</p> <img class="userimg" src="images/<?php echo $user['userImg'];?>" alt="">
</div>