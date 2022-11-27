<?php
$name=$_REQUEST['uname'];
$email=$_REQUEST['em'];
$val=$_REQUEST['val'];
echo "<form method='post' action='last.php'>";
echo "<input type='hidden' name='val' value='$val'>";

for($i=0;$i<$email;$i++)
{
	echo "<input type='$name' value='$val'><br>";
}
echo"<input type='submit' name='save' value='submit'>";
//echo "$name<br>$email<br>$val";
?>

	
	
