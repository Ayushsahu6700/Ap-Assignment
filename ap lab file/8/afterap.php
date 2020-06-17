<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-image: url("s1.jpg");
			background-size: cover;
			
		}
		.background{
			width: 100%;
			height: 50vh;
			background-color: #0009;
			border-bottom: 6px solid green;
			border-right: 6px solid green;
			transform:translate(0,50%);
		}

		h1{
			text-shadow: 15px 15px 15px #0009;
			display: flex;
			justify-content: space-around;
			width:840px;
              color:white;
              font-size: 80px;
          margin-left:300px;
          padding-top: 150px;
      }
      .colorchange{
	animation:colorchangeayush 1s infinite;
	font-size: 200%;
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
</head>
<body>
<div class="background">

	<h1 class="head">Registration <span class="colorchange ">Done</span></h1>
</div>

</body>
</html>