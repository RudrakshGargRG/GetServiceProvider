<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<table id="customers">
  <tr>
    <td>S.No</td>
    <td>Name</td>
    <td>Address</td>
    <td>Phone No.</td>
    <td>Verified</td>
    <!-- <td>Stars</td>
    <td>Give Rating</td> -->
    <!--<td>Reviews</td>
    <td>Give Review</td> -->
</tr>
<?php
include 'db_conn.php';
$serviceID=$_POST['service'];
$pin=$_POST['pin'];
$sql = "SELECT * FROM serviceprovider WHERE (SID='".$serviceID."' AND PIN='".$pin."')";
$count=1;
foreach($con->query($sql, PDO::FETCH_ASSOC) as $row)
{
    $isVerified=$row['Verified'];
    $res;
    if($isVerified == 1)
    {
        $res='&#x2611';
    }
    else
    {
        $res='&#x2612';
    }
    //$stmt = $con->prepare("SELECT avg(star) as avg_star FROM reviews WHERE SPID=?");
		//$stmt->execute([$row['SPID']]);
		//$user = $stmt->fetch();
		//$user_id = $user['avg_star'];


    echo "<tr>";
    echo "<td>".$count."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['PhoneNumber']."</td>";
    echo "<td>".$res."</td>";
    // echo "<td>".$user_id."</td>";
    // echo "<form method='POST' action='give_rating.php'>";
    // echo "<td> <button type='submit' name='toRate' value='".$row['SPID']."'>Rate</button> </td>";
    // echo "</form>";
    echo "</tr>";
    $count=$count+1;
}
?>
</table>
</body>
</html>