<?php
$username="root";
$password="";
$server='localhost';
$db='apassignment';

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
?>

<?php
}
else
{
	?>
	<script >
		alert("No Connection")
	</script>
	<?php
}
?>