<?php 

$country=$_GET['country'];

$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


if (isset($country)==true  && isset($_GET['context'])==false)
{
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo "<table>

<tr>

<th> Name </th>
<th> Continent</th>
<th> Independence </th>
<th>Head of State</th>


</tr>";

foreach ($results as $row)

{


echo"<tr>";
echo  "<td>".$row['name']."</td>";
echo  "<td>".$row['continent']."</td>";
echo  "<td>".$row['independence_year']."</td>";
echo  "<td>".$row['head_of_state']."</td>";

	
}

echo"</table>";



}elseif  (isset($country)==true && isset($_GET['context'])==true){

	$stmt=$conn->query("SELECT c.name as city, c.district,c.population FROM cities c INNER JOIN countries cs ON c.country_code=cs.code WHERE cs.name like '$country'");
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);




	echo "<table>

<tr>

<th> Name </th>
<th> District</th>
<th> Population </th>



</tr>";

foreach ($results as $row)

{


echo"<tr>";
echo  "<td>".$row['city']."</td>";
echo  "<td>".$row['district']."</td>";
echo  "<td>".$row['population']."</td>";

}

echo "</table>";

}

?>
