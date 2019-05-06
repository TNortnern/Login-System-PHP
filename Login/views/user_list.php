<style>

.inline {
  display: inline;
}

.link-button {
  background: none;
  border: none;
  font-weight:bold;
  color: black;
  cursor: pointer;


}
.link-button:focus {
  outline: none;
}
.link-button:active {
  color:#0000EE;
}

#del{
    position:absolute;
    left:50%
}

#mod{
    position:absolute;
    left:35%
}

#del:hover{
    text-decoration:underline;
}

#mod:hover{
    text-decoration:underline;
}

    .delete {
        position: absolute;
        left: 40%;
        color: black;
        display:none;
        font-weight: bold
    }

    .modify {
        position: absolute;
        left: 35%;
        color: black;
        display:none;
        font-weight: bold
    }
</style>
<?php

?>
<?php

// handles extracting the data
$aryUser = getAllUsers();
// printing the data as well as the hidden 'delete' button
foreach ($aryUser as $user) {
    $str = "
        <a href='?use=$user[userID]'>Username: $user[username], E-mail: $user[email]</a>

        <form method='post' action='index3.php?option=modifyForm' class='inline'>
        <input type='hidden' name='theID' value=$user[userID]>
        <button type='submit' name='submit_param' value='addition' class='link-button' id='mod'>
        Modify $user[username]
        </button>
      </form>
      <form method='post' action='index3.php?option=delete&nm=$user[username]' class='inline'>
        <input type='hidden' name='theID' value=$user[userID]>
        <button type='submit' name='submit_param' value='deletion' class='link-button' id='del'>
        Delete $user[username]
        </button>
      </form>

        <br>";
        // <a class='modify' href=index3.php?option=modifyForm&use=$user[userID]>Modify</a>
        // <a class='delete' href='index3.php?option=delete&use=$user[userID]'>Delete</a>
    echo ($str);
    
}
?>
<?php
// so the form disappears after clicked
if (empty($_GET['add'])) {

    ?>
    <div style="display:flex">
        <form action="index3.php">
            <input type="text" name="option" value="addForm" hidden>
            <input class="btn btn-primary" type="submit" name="submit" value="Add User">
        </form>

    </div>

<?php

}
?>

</section>