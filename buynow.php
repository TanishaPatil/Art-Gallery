<?php
	session_start();
	//user needs to login to checkout
	$_SESSION['message'] = 'You need to login to buy art';
	header('location: cart.php');
?>
