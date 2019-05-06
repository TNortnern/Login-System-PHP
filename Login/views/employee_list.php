<style>
    .delete {
        position: absolute;
        left: 35%;
        color: black;
        font-weight: bold
    }

    .modify {
        position: absolute;
        left: 25%;
        color: black;
        font-weight: bold
    }
</style>
<?php
// echo "<form action='' method='get'>
//     <input type='text' value= $employee[employeeID]>
//     <input type='text' value=$employee[employeeFName]>
//     <input type='text' value= $employee[employeeLName]>
//     <input href='ff' type='submit' value='Modify'>

// <section>
//     <h4>Employees</h4>";
?>
<?php

// handles extracting the data
$aryEmploy = getAllEmployees();
// printing the data as well as the hidden 'delete' button
foreach ($aryEmploy as $employee) {
    $str = "
        <a href='?emp=$employee[employeeID]'>$employee[employeeFName] $employee[employeeLName]</a>
        <a class='modify' href=index.php?option=modifyForm&emp=$employee[employeeID]>Modify</a>
        

        <a class='delete' href='index.php?option=delete&emp=$employee[employeeID]'>Delete</a>
        
        <br>";
    echo ($str);
}
?>
<?php
// so the form disappears after clicked
if (empty($_GET['add'])) {

    ?>
    <div style="display:flex">
        <form action="index.php">
            <input type="text" name="option" value="addForm" hidden>
            <input class="btn btn-primary" type="submit" name="submit" value="Add Employee">
        </form>
        <!-- <form action="index.php">
                    <input type="text" name="option" value="deleteForm" hidden>
                    <input type="submit" name="submit" value="Delete Employees">
                </form>
                <form action="index.php">
                    <input type="text" name="option" value="modifyForm" hidden>
                    <input type="submit" name="submit" value="Modify Employees">
                </form> -->

    </div>

<?php

}
?>

</section>