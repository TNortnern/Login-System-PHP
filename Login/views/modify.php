<style>

</style>

<?php
// $user = getUser($_GET['use']);
$id = $_POST['theID'];
$user = getUser($id);
$isAdmin = $user['admin'];

?>
<?php

?>


<div style="display:flex;flex-direction: column; align-items:center; text-align:center">
    <div class="col-sm-6">
        <h1 class="text-center">Modify User</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="" autocomplete="false">
            <div class="form-group">
                <label for="userName">Username</label>
                <input type="text" name="userName" value=<?php echo $user['username'] ?> class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" value=<?php echo $user['email'] ?> class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="passWord" value=<?php echo $user['password'] ?> class="form-control">
            </div>
            <div class="form-group">
            <label for="admin">Admin Privileges</label><br>
                <select name="admin" id="admin">
                    <option <?php echo "value='$user[admin]'"; ?>><?php echo $user['admin'] ?></option>
                    <?php if ($isAdmin == "Yes") {
    echo "<option value='No'>No</option>";
} else {
    echo "<option value='Yes'>Yes</option>";
}
?>
                </select>
            </div>
            <label style="color:green; font-weight:bold;" for="userImg">Change the user's image</label><br>
        <input type="file" name="userImg"><br>
            <input type="text" name="theID" id="theID" <?php echo "value='$user[userID]'"; ?> hidden>

            <input class="btn btn-primary" type="submit" name="sub" value="MODIFY">

        </form>

    </div>


    <?php
$checker = empty($_POST['userName']) || empty($_POST['passWord']);
if (isset($_POST['sub'])) {
    if ($checker) {
        echo "<h1 class=error>None of the fields can be empty!</h1>";
    } else {
        updateEmployee($user['userID']);
        // redirects to index for a success message
        header("Location:index3.php?mod=m&c=$currentName&n=$_POST[userName]");

        // header("Location:index.php?modified");
    }
}

?>
</div>