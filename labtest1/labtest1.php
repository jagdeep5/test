<?php


if(isset($_POST['btn1']))
{
	$_POST['result']=$_POST['number1']+$_POST['number2'];
}
else if(isset($_POST['btn2']))
	{
	$_POST['result']=$_POST['number1']-$_POST['number2'];
}
else if(isset($_POST['btn3']))
	{
	$_POST['result']=$_POST['number1']*$_POST['number2'];
}
else if(isset($_POST['btn4']))
	{
	$_POST['result']=$_POST['number1']/$_POST['number2'];
}
else if(isset($_POST['btn5']))
	{
	$_POST['result']='';
	$_POST['number1']='';
	$_POST['number2']='';
}
?>
<html>
<head>
   <title>labtest1</title>
 
</head>

<body>
<form  action="labtest1.php" method="post">


Number1:<input type="text" name="number1" value="<?php if(isset($_POST['number1']))
{
	echo $_POST['number1'];
}?>" pattern="[1-9]\d*(\.\d+)?$" title ="number allow" required><br><br>
Number2:<input type="text"name="number2" value="<?php if(isset($_POST['number2']))
{
	echo $_POST['number2'];
}?>"pattern="[1-9]\d*(\.\d+)?$"  title ="number allow" required><br><br>
Result:<input type="text" name="result" value="<?php if(isset($_POST['result']))
{
echo $_POST['result'];} ?>" readonly><br><br>
 <input type="submit" value="+" name="btn1" >
<input type="submit" value="-" name="btn2" >
<input type="submit" value="*" name="btn3"  >
<input type="submit" value="/"name="btn4" >
<input type="submit" value="clear all"name="btn5" >
</form>
</body>
</html>