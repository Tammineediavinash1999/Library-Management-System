<?php
  session_start();
if(isset($_POST['reg']))
{
  $conn=new mysqli('localhost','root','','library');
  $fnam=$_POST['fname'];
  $lname=$_POST['lname'];
  $id=$_POST['id'];
  $branch=$_POST['branch'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  

  $sqll="insert into register values('$fnam','$lname','$id','$branch','$email','$pass')";
  $res=$conn->query($sqll);
  header("Location:http://localhost/library%20management/prog.php#h3");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="prog.css">
	<style type="text/css">
		body{
            background-image: url('pic2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            //overflow: hidden; 
        }
        h1{
            background-color: rgba(7,40,195,0.4);
            font-size:50px;
            text-align: center;
            padding: 30px;
            color:white;
            //border: 2px solid white;
        }
       .butt1{
       	padding:10px;
       }
        .butt1 a{
        	text-decoration: none;
        	color:white;
        	//border: 1px solid black;
        	font-size: 23px;
        	padding-right: 40px;
        	padding-left: 40px;
        }
        .butt4{
        	padding: 10px 25px;
        }
        button:first-child{
        	width:160px;
        	
        }
        button:not(:first-child){
        	float:right;
        	margin-left: 20px;
        }
        /*.butt1{
          
            float:right;
            font-size:20px;
            width:250px;
        }
        .butt2{
            float:left;
        }
        .butt1 a{
            text-decoration:none;
            color:white;
          //border: 1px solid black;
          	//width:300%;
           //margin: 20px;
           //padding-right: 70px;
           //padding-left: 100px;
          
        }
      .butt4{
      	padding: 8px 80px;
      	margin-left: 0;
      	padding-left: 90px; text-align: center;
      }*/
     
      #q{
      	padding: 8px 80px;
      	margin-left: 0;
      	padding-left: 40px;padding-right: 50px; text-align: center;
      }
      input .li:hover{
      	opacity:1;			
      }
	</style>
</head>

<body>
	<div class="container">
		<h1>NALANDA &nbsp;&nbsp;LIBRARY</h1><br/><br/>

		<div class="sticky">
			 <button class="btn btn-success butt1"><a href="prog.php" class="butt4">Home</a></button></div>
			<button class="btn btn-success butt1"><a href="prog.php#h3" class="butt4" id="q">Log In</a></button>
			<button class="btn btn-success butt1"><a href="#h4" class="butt4" id="q">Register</a></button>
		<!-- </div> -->
		
		
<br><br/><br/>

<div id="h4" class="form form2">
                <form class="register-form" action="#" method="POST">

                   <div class="aa" style="position: relative;left:150px;">
                  <label class="radio-inline">
                  <input type="radio" name="person" style="width: 20px;height: 20px;"><span style="position: relative;left:10px;color:white;font-size: 20px;">STAFF</span>
              </label>
              <label class="radio-inline">
                  <input type="radio" name="person" style="width: 20px;height: 20px;position: relative;left: 50px;top:2px;"><span style="position: relative;left:60px;color:white;font-size: 20px;">STUDENT</span>
              </label>
            </div><br/>

            <div class="row">
              <div class="col-xs-6 aa"><input type="text" placeholder="FIRST NAME" name="fname" /></div>
              <div class="col-xs-6 aa"><input type="text" placeholder="LAST NAME" name="lname" /></div>
            </div>
                    <div class="aa"><input type="text" placeholder="ID" name="id" maxlength="5" /></div>
                    <div class="aa"><input type="text" placeholder="BRANCH" name="branch" /></div>
                    <div class="aa"><input type="email" placeholder="EMAIL"  name="email" /></div>
                    <div class="aa"><input type="password" placeholder="PASSWORD"  name="pass" /></div>
                    <div class="aa"><input type="password" placeholder="CONFIRM PASSWORD"  name="confpass" /></div>

                   <!--  <button class="aa">create</button> -->
                   <input type="submit" value="CREATE" class="aa li" style="background-color: green;color: white;" name="reg">
                  <p class="message aa">Already Registered?&nbsp;&nbsp;<a href="prog.php#h3">Login</a></p>
                </form>
          </div>