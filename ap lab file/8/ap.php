<!DOCTYPE html>
<html>
<head>
	<style >
		@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
		*{
			margin: 0; padding: 0; box-sizing: border-box;
font-family: 'Muli', sans-serif;
		}
		.background{
			background-image: url("s1.jpg");
			background-size: cover;
			border-left: 6px solid green;
			border-right: 6px solid green;
		}
		.head{
		    padding-left: 300px;
			height: 60px;
			width: 850px;
		}
		h1{
			text-shadow: 15px 15px 15px #0009;
			display: flex;
			justify-content: space-around;
			width:840px;
              color:white;
              font-size: 80px;
              border-bottom: 6px solid green;
               border-bottom:6px solid green;
          margin-bottom:50px;
          padding:13px 0;
          
          }
          .main-div{
          	padding-top: 80px;
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.leftside{
			background-color: #dfe6c9;
			border-radius:54% 46% 75% 25% / 28% 32% 68% 72%;
			box-shadow: 25px 25px 25px #0009;
		}
		.leftside img{
			max-width: 1000px;
			height: auto;

		}
		.rightside{
			width:500px;
			height: 400px;
			background-color: #0009;
			border-radius: 15px;
			border-bottom: 6px solid green;
			border-right:6px solid green;
			box-shadow: 15px 15px 15px #0009;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;

		}
		.reg{
			margin-bottom: 50px;
		
		}
		.reg h2{
			float: left;
			color: white;
			border-bottom: 4px solid green;
			border-left: 4px solid green;
		}
		.textbox{
	     width:300px;
		 overflow:hidden;
		 font-size:20px;
		 padding:8px 0;
		 margin:8px 0;
		 border-bottom:1px solid green;
		 
}
.textbox i{
	      color:green; 
	      width:26px;
		  float:left;
		  text-align:center;
	
}
.textbox input{
               border:none;
outline:none;
background:none;
color:white;
font-size:15px;
width:80px;
float:left;
margin: 0 10px;
}
.btn{
	width:100%;
	background:none;
	border:2px solid green;
	color:white;
	padding:5px;
	font-size:18px;
	cursor:pointer;
	margin:12px 0;
}
.message{
	color:orange;
}
.colorchange{
	animation:colorchangeayush 1s infinite;
	font-size: 100%;
}
@keyframes colorchangeayush{
	0%{color:red;}
	25%{color:#bf55ec;}
	50%{color:yellow;}
	75%{color:green;}
	100%{color:#bf55ec;}

}
	</style>
	<title></title>

    <meta name="viewport" 

          content="width=device-width, initial-scale=1.0"> 

    <meta charset="utf-8"> 

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Muli:ital,wght@1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body class="background">
	<div class="head">
	<h1 align="center"><span class="colorchange">REGISTRATION PAGE</span></h1>
    </div>
    <div class="main-div">
    	<div class="leftside logo animated flip">
    		<img src="reg.png" class="logo animated flip">
    	</div>
    	<div class="rightside animated bounceInLeft">
    		<form method="POST">
    		<div class="reg">
    			<h2>REGISTER</h2>
    		</div>
   
    			<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" id="t1" placeholder="Username" name="username" value="" required/>
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Password" id="t2" name="password" value="" required/>
</div>
<div class="textbox">
	<i class="fa fa-phone" aria-hidden="true"></i>
	<input type="text" placeholder="Mobile no" name="mobile" required/>
</div>
<div class="textbox">
	<i class="fa fa-book" aria-hidden="true"></i>
	<input type="text" placeholder="College" name="college" required/>
</div>
<div>
<input class="btn" type="submit"  name="submit" required/> 
</div>
    		</form>
    		
    	</div>
    	
    </div>
    
    
</body>
</html>
<?php
include'connectionap.php';
if(isset($_POST['submit']))
{
	$name=$_POST['username'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$college=$_POST['college'];

	$insertquery="insert into registration(Name,Password,Mobile,College)values('$name','$password','$mobile','$college')";
	$res=mysqli_query($con,$insertquery);

	if($res)
	{
?>
		<script >
			window.open("http://localhost/ayush/afterap.php");
		</script>
<?php
	}
	else
	{
?>
          <script >
			alert('reg unsuccessful');
		</script>
<?php
		
	}
}
?>
