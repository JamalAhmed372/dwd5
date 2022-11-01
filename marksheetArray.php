<?php
$marks=[
	     "Ali" =>[
          "physics" => 85,
          "maths"=>78,
          "chemistry" =>89  

	     ],

	     "Ahmed" => [
          "physics" => 68,
          "maths"=>73,
          "chemistry"=>79
	     ],

	     "Hasan" => [
          "physics" => 62,
          "maths"=>67,
          "chemistry"=>92
	     ]

	 ];
echo"<table border='2px' cellpadding='5px' cellspacing='0'>
  <tr>
       <th>Student name</th>
       <th>Physics</th>
       <th>Maths</th>
       <th>Chemistry</th>


  </tr>

";
	 foreach($marks as $key =>$v1)
	 {
	 	echo "<tr>
	 	      <td> $key </td>" ;
	 	foreach($v1 as $v2)
	 	{
	 		echo "<td> $v2 </td>";
	 	}
	 	echo"</tr>";
	 }
	 echo "<table>";