
<html>
<body>

<table  id="box">
<tbody>
</body>
</html>
<?php
include("database.php");
$query="select * from chat  ";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){

echo "<tr style='font-size:14px;color:white '><td>&nbsp;&nbsp;".$row['user']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td style='font-size:20px;color:silver '>".$row['message']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";	

echo "<td style='font-size:12px;color:silver '>".$row['time']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";

	
}

?>
</tbody>
</body>
</html>
