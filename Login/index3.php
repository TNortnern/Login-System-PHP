<?php
session_start();
?>
<style>
	.success {
		color: green;
		text-align: center;
	}

	.error {
		color: red;
		text-align: center
	}

	form img{
		width: 200px;
		height:200px
	}
	h2{
		text-align:center
	}
</style>
<?php


include "./models/database.php";
include "./views/header.php";
if (isset($_GET['mod'])){
if($_GET['mod'] == "a"){
	echo "<h2 style='color:green'>Succesfully added $_GET[n] as a user!</h2>";
}
else if($_GET['mod'] == "m"){
	echo "<h2 style='color:green'>Succesfully modified $_GET[mod]!</h2>";
}
else if($_GET['mod'] == "d"){
	echo "<h2 style='color:green'>Succesfully deleted $_GET[mod]!</h2>";
}

}
include "./models/user_db.php";
// checks to see if a user was registered

//checks what form was selected
if (!isset($_GET['option'])) {
	$_GET['option'] = NULL;
	if(isset($_GET['use'])){
		include "./views/user_display.php";
	}
	include "./views/user_list.php";
} else {
	$option = $_GET['option'];
	if ($option == 'addForm') {
		include "./views/addForm.php";
	} else if ($option == 'modifyForm') {
		include "./views/modify.php";
	}
	else if($option == 'delete'){
		include "./views/delete.php";
	}
}
// prevents access to the page without logging in
if($_SESSION['valid'] != "true"){
    header("Location: ./index.php?nli");
}



include "./views/footer.php";
?>


