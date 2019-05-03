<html>
<head><title>PAYMENT</title></head>
<body>
<?php
session_start();
$_SESSION['$sm']=stripcslashes($_POST['moviees']);
echo $_SESSION['$sm'];
$_SESSION['pay'];
$name=$_SESSION['username'];
echo "<center><i><h1>PAYMENT PAGE</h1></i></center>";
echo '<h1><i>'.'Welcome     '.$_SESSION['username'].'<br><br>'.'</i></h1>';
echo '<h2>'. 'Selected movie is:'.$_SESSION['$sm'].'</h2>';

echo "<table><tr><td><i><h2><br><br><center>LAST BOOKED PAYMENT:</h2></i>";
foreach ($_SESSION['pay'] as $i=>$j)
{
	echo '<h2>'.$i.': '.$j.'<br>';
}


?>
<table>
<tr>
<td><h1><br><br>Donation Amount:</h1><td><br><br><br><input type='text' name='donation'><br></tr>
<td><input type='submit' name='confirm' value='CONFIRM TRANSACTION' onclick='confirm()'>

<script>
function confirm()
{
	alert ("Your transaction is successful")
}
</script>

</body>
</html>