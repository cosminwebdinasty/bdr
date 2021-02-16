<html>
<head>
	<title>Modificare date</title>
	<style>
		table {
			border-collapse: collapse;
			width: 40%;
			cellspacing: 3px;
			cellpadding: 3px;
			text-align: center;
		}
		th,td {
			height: 50px;
			vertical-align: center;
			border-bottom: 1px solid #DDD;
		}
		tr:hover {
			background-color: #F5F5F5;
		}
	</style>
</head>
<body bgcolor="AABBCC">

<?php  
include "my_connect.php";

$query="SELECT * FROM artisti";
$result=mysqli_query($conexiune,$query);
if(!$result)
{
	die("Nu am gasit date! ".mysql_error());
}	
$nr=mysqli_num_rows($result);
if($nr!=0)
{
	echo "<center><table>
		  <tr>
			<th>ID</th><th>Prenume</th><th>Nume</th><th>Experienta</th>
			<th>Telefon</th>
		  </tr>";
		  
	while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
	{
		$id=$row['id_artist'];
		echo "<tr><td>{$row['id_artist']}</td>".
			     "<td>{$row['nume']}</td>".
			     "<td>{$row['prenume']}</td>".
			     "<td>{$row['data_nasterii']}</td>".
				 "<td>{$row['email']}</td>".
				 "<td>{$row['id_casa']}</td>".
				 "<td><a href='editeaza.php?id_artist=$id'>Editeaza</a></td></tr>";
	}
}

?>		  
	</center></table>
</body>
</html>