<?php
session_start();
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
//echo $email;
///////////////////

		$conn=new mysqli('localhost','root','','library');
	//	$email=$_POST["email1"];
//		$pass=$_POST["pass1"];
		$sql="select * from register where email='$email' and password='$pass'";
		$res=$conn->query($sql);
		
	/*	$r1=$res->fetch_array();
		echo $email."   ".$pass."<br/>";
		$_SESSION['fn']=$r1['fname'];
		$_SESSION['ln']=$r1['lname'];
		$_SESSION['Id']=$r1['id'];
		$_SESSION['br']=$r1['branch'];  */
		$vv=0;
		if($pass='admin' && $email=='admin@gmail.com' )
		{

			//echo "dfgdg";
			$vv=1;
			 header("Location:http://localhost/library%20management/admin.php");
		}
		
		

		while ($r1=mysqli_fetch_array($res)) {
		$_SESSION['fn']=$r1['fname'];
		$_SESSION['ln']=$r1['lname'];
		$_SESSION['Id']=$r1['id'];
		$_SESSION['br']=$r1['branch'];
		
			header("Location:http://localhost/library%20management/login2.php");	
			$vv=$vv+1;
		}
				if($vv==0) 
					{
						header("Location:http://localhost/library%20management/prog.php?message=Invalid Username / Password");
					}
?>
		<!-- /*else
		{
			$sql="select * from register where email='$email' and password='$pass'";
			$result=$conn->query($sql);
			
			if($result->num_rows==0){
				header("Location: prog.php#h3");
			}
			else
			{

				 while($row=$result->fetch_array())
				 {
				 	if($row['email']==$email && $row['password']==$pass)
				 	{
			        	echo "login success";
			        	// $_SESSION['fnam']=$row['fname'];
			        	// $_SESSION['lnam']=$row['lname'];

			        	$_SESSION['mail']=$row['email'];
			        	echo $_SESSION['mail'];
				        header("Location:login2.php");
				    }
			     }
			}
		}
	}	
	
?>
///////////////////
?> -->
