<?php
	session_start();
	$conn=mysqli_connect('localhost','root','','library');
?>
<?php

if(isset($_POST['return_btn']))
{
	$x=$_POST['book_id'];
	$v=$_SESSION['Id'];
//	echo $x;
	$sql="insert into return_request values('$v','$x')";
	$result=$conn->query($sql);
//	echo $v;

	header("Location:http://localhost/library%20management/issued.php");
}

	
?>
<?php
	if(isset($_POST['renew_btn'])){
	$x1=$_POST['book_id'];
	$v1=$_SESSION['Id'];
	$sql2="insert into renew_request values('$v1','$x1')";
	$result2=$conn->query($sql2);

	header("Location:http://localhost/library%20management/issued.php");
}
?>
