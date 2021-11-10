<?php session_start(); if(!isset($_SESSION['id'])){ header('location: ./');}?>
<?php 
include('include/head.php');
include('include/navigate.php');?>




	<div>
		<?php echo $_SESSION['id'];?>
	</div>



<?php include('include/close.php');?>