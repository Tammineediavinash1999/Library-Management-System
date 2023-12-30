<?php
session_start();$conn=mysqli_connect('localhost','root','','library');
?>
<?php
if (isset($_POST['issue_btn'])) {
	# code...


$var=$_POST['book_id'];
$v=$_SESSION['Id'];
//echo $var;
$sql="insert into issue_request values('$v','$var')";
$res=$conn->query($sql);
header("Location:http://localhost/library%20management/search.php");
}
?>

<?php 
	if(isset($_POST['accept_btn'])){
		$v1=$_POST['s_id'];
		$v2=$_POST['b_id'];
		$sqlx="select current_date";
		$resx=$conn->query($sqlx);
		$rowx=mysqli_fetch_array($resx);
		$fdate=$rowx['current_date'];

		$sqlx1="select adddate(current_date(),interval 45 day) as last_date";
		$resx1=$conn->query($sqlx1);
		$rowx1=mysqli_fetch_array($resx1);
		$fdate1=$rowx1['last_date'];

		$sql2="insert into issue values('$v1','$v2','$fdate','$fdate1')";

		$s1=$conn->query($sql2);
		echo "enter done<br>";
		$sql5="insert into response values('$v1','$v2','Accepted')";
		$s5=$conn->query($sql5);
		$sql3="update books set copies=copies-1 where bid='$v2'";
		$s2=$conn->query($sql3);
		echo "update done<br>";
		$sql4="delete from issue_request where sid='$v1' and bid='$v2'";
		$s3=$conn->query($sql4);
		echo "delete done<br>";

		header("Location:http://localhost/library%20management/viewrequest.php");

			}
  ?>

  <?php if(isset($_POST['reject_btn'])){
		$v3=$_POST['s_id1'];
		$v4=$_POST['b_id1'];
		$sql6="insert into response values('$v3','$v4','Rejected')";
		$s6=$conn->query($sql6);
		$sql7="delete from issue_request where sid='$v3' and bid='$v4'";
		$s7=$conn->query($sql7);
		header("Location:http://localhost/library%20management/viewrequest.php");
}?>


<?php 
	if(isset($_POST['accept_return_btn'])){
		$v5=$_POST['s_idq'];
		$v6=$_POST['b_idq'];
		$sql10="update books set copies=copies+1 where bid='$v6'";

		$s10=$conn->query($sql10);
		
		
		
		$sql11="delete from return_request where sid='$v5' and bid='$v6'";
		$s11=$conn->query($sql11);

		$sq="delete from issue where sid='$v5' and bid='$v6'";
		$sq1=$conn->query($sq);

		$sq2="insert into return_response values('$v5','$v6','Accepted')";
		$sq3=$conn->query($sq2);

		header("Location:http://localhost/library%20management/viewrequest.php");

			}
  ?>


<?php 
	if(isset($_POST['accept_renew_btn'])){
		$v7=$_POST['s_idr'];
		$v8=$_POST['b_idr'];

		// $sqly="select current_date";
		// $resy=$conn->query($sqly);
		// $rowy=mysqli_fetch_array($resy);
		// $fdatey=$rowy['current_date'];

		$sqly1="select adddate(current_date,interval 45 day) as last_date";
		$resy1=$conn->query($sqly1);
		$rowy1=mysqli_fetch_array($resy1);
		$fdatey1=$rowy1['last_date'];


		$sql15="update issue set last_date='$fdatey1' where sid='$v7' and bid='$v8'";

		$s15=$conn->query($sql15);


		

		
		
		
		$sql16="delete from renew_request where sid='$v7' and bid='$v8'";
		$s16=$conn->query($sql16);

		$sq4="insert into renew_response values('$v7','$v8','Accepted')";
		$sq5=$conn->query($sq4);


		header("Location:http://localhost/library%20management/viewrequest.php");

			}
  ?>


<?php 
	if(isset($_POST['reject_renew_btn'])){
		$v9=$_POST['s_idr1'];
		$v10=$_POST['b_idr1'];

		
		
		$sq16="delete from renew_request where sid='$v9' and bid='$v10'";
		$sq17=$conn->query($sq16);

		$sq18="insert into renew_response values('$v9','$v10','Rejected')";
		$sq19=$conn->query($sq18);


		header("Location:http://localhost/library%20management/viewrequest.php");

			}
  ?>
