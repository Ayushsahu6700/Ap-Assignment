<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			margin: 0; padding: 0; box-sizing: border-box;
font-family: 'Muli', sans-serif;
		}
		h1{text-align: center; line-height: 20vh;}
		.main-div{
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.left-side{
		}
		.left-side img{
			max-width: 600px;
			height: auto;
		}
		.right-side{
			width:500px;
			height: 400px;
			background-color: #dfe6e9;
			border-radius: 15px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;

		}
		.input1{
			width: 250px;
			height: 40px;;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;
		}
		.selection{
			width: 100%;
			margin: 20px 0;
		}
		.btn{
			padding: 10px  16px;
			border-radius: 5px;
			outline: none;
			border:none;
			background-color: #6c63ff;
			color: white;
			font-size: 0.9rem;
		}
		p{
			margin-top: 20px 0 0 0;

		}
	</style>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Muli:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Temperature Conversion</h1>
		<div class="main-div">
			<div class="left-side">
				<img src="../weatherimages/weather.png">
			</div>
			<div class="right-side">
				<form method="
				GET">
					<input type="text" name="num" placeholder="enter your number" class="input1">
					<div class="selection">
						<label>cels</label>
						<input type="radio" name="units" value="cel">
						<label>faren</label>
						<input type="radio" name="units" value="feh">
						
					</div>
					<input type="submit" name="submit" value="Convert Now" class="btn">
				</form>
				<div>
					<p>
						<?php
						if(isset($_GET['submit'])){
							$num=$_GET['num'];
							$temp=$_GET['units'];
							if($temp=="cel"){
								$result=$num*9/5 + 32;
								echo"The value of cel in faren is".$result;
							}
							else{
								$result=($num-32)*5/9;
								echo "The value of faren in cel is ".$result;
							}
						}
						?>
					</p>
				</div>
				
			</div>
		</div>
	</header>

</body>
</html>