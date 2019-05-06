

<div style="width:100%; text-align:center">
    <div class="col-sm-6;">
        <h1 class="text-center">New User</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="" autocomplete="false">
            <div class="form-group">
                <label for="userName">Username</label>
                <input type="text" name="userName" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="passWord" class="form-control">
            </div>
            <div class="form-group">
            <label for="admin">Should this user be an admin?</label><br>
                <select name="admin" id="admin">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <label style="color:green; font-weight:bold;" for="userImg">Add the user's image</label><br>
        <input type="file" name="userImg"><br>
            
            <input class="btn btn-primary" type="submit" name="submit" value="ADD">

        </form>

    </div>
    <?php

    $checker = empty($_POST['userName']) || empty($_POST['passWord']);
    if ($_POST) {
        if ($checker) {
            echo "<h1 class=error>None of the fields can be empty!</h1>";
        } else {
            addUser();
            // redirects to index for a success message
            header("Location:index3.php?mod=a&n=$_POST[userName]");

            // header("Location:index.php?modified");
        }
    }


    ?>