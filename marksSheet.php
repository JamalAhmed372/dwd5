<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <form method="get">
   	<ul>
   		<li><input type="text" name="txteng" placeholder="English"></li>
         <li><input type="text" name="txtmath" placeholder="Math"></li>
         <li><input type="text" name="txtphp" placeholder="Php"></li>
         <li><input type="text" name="txtjava" placeholder="Java"></li>
         <li><input type="text" name="txthtml" placeholder="Html"></li>
         <li><input type="submit" name="submit" value="Grade"></li>




   	




</ul>
   </form>
   <?php
   if(isset($_GET['submit']))
   {
   	$eng=$_GET['txteng'];
   	$math=$_GET['txtmath'];
   	$php=$_GET['txtphp'];
   	$java=$_GET['txtjava'];
   	$html=$_GET['txthtml'];

     if($eng=="" || $math=="" || $php=="" || $java=="" || $html=="")
{
	echo"<script> alert('Plz Enter Marks')</script>";
}



   	$obtmarks=$eng+$math+$php+$java+$html;
   	$totmarks=500;
   	$grade=($obtmarks/$totmarks)*100;

   	if($grade>=90)
   	{
   		$out= "Grade A";

   	}

   	else if($grade>=75)
   	{
   		$out= "Grade B";
   	}
	else if($grade>=65)
   	{
   		$out= "Grade C";
   	}

	else if($grade>=45)
   	{
   		$out= "Grade D";
   	}

	else 
   	{
   		$out= "Fail";
   	}





   
?>
<table border="1px solid" width="60">
	<tr>
		<tr>
			<th>
				Subjects
			</th>
			<th>
				Marks
			</th>
</tr>


<tr> 
	<td>English</td>
<td><?php echo $eng; ?></td>
<tr>
<td>Math</td>
<td><?php echo $math; ?></td>
</tr>
<tr>
<td>php</td>
<td><?php echo $php; ?></td>
</tr>
<tr>
<td>Java</td>
<td><?php echo $java; ?></td>
</tr>
<tr>
<td>Html</td>
<td><?php echo $html; ?></td>
</tr>
</tr>

<tr>  <td>Obtain Marks</td>
        <td><strong><?php echo $obtmarks; ?></strong></td>




</tr>
<tr>
	<td>Grade</td>
<td><strong><?php echo $out; ?></strong> </td>
</tr>
</tr>


<?php
}
?>
</table>
</body>
</html>