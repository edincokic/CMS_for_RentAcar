<?php
include('../functions/functions.php');

if (!isLoggedIn()) {
	$_SESSION['msg'] = "Morate se prijaviti";
	header('location: login.php');
}

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$del = mysqli_query($db,"delete from cars where id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:listCar.php");
    exit;	
}
else
{
    echo "Greška!"; 
}

?>