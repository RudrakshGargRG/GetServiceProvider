<?php 
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

  
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
.login-admin{
  position:absolute;
    bottom:5px;
    right:10px;
}
.sub-main{
  width: 30%;
  margin:22px;
  float: left;
}
.button-one, .button-two, .button-three{
  text-align: center;
  cursor: pointer;
  font-size:15px;
  margin: 0 0 0 1390px;
}
/*Button Two*/
.button-two {
  border-radius: 4px;
  background-color: #ffce30;;
  border: none;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;

}
.button-two span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button-two span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button-two:hover span {
  padding-right: 25px;
}

.button-two:hover span:after {
  opacity: 1;
  right: 0;
}

table, th, td {
  border: 1px solid black;
}


</style>
</head>
<body>
<div class="sub-main">
      <button class="button-two" onclick="window.open('logout.php','_self');"><span>LOGOUT</span></button>
      <br>
      <br>
      <br>

</div>
<table id="customers">
  <tr>
    <td>S.No</td>
    <td>Name</td>
    <td>Address</td>
    <td>Phone No.</td>
    <td>Service</td>
    <td>PIN</td>
    <td>Verified</td>
    <td>Verify</td>
    <td>Delete</td>
</tr>
<?php
include 'db_conn.php';
$sql = "SELECT * FROM serviceprovider";
$count=1;
foreach($con->query($sql, PDO::FETCH_ASSOC) as $row)
{
    $isVerified=$row['Verified'];
    $res;
    $type_button="Verify";
    if($isVerified == 1)
    {
        $res='&#x2611';
        $type_button="Unverify";
    }
    else
    {
        $res='&#x2612';
    }
    echo "<tr>";
    echo "<td>".$count."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['PhoneNumber']."</td>";
    
    $sql2="SELECT * from services WHERE SID=".$row['SID'];
    $row2=$con->query($sql2,PDO::FETCH_ASSOC);


    $stmt = $con->prepare("SELECT * FROM services WHERE SID=?");
		$stmt->execute([$row['SID']]);
		$user = $stmt->fetch();


    echo "<td>".$user['Service']."</td>";
    //service 
    echo "<td>".$row['PIN']."</td>";
    //pin
    echo "<td>".$res."</td>";
    if($isVerified==1)
    {
    echo "<form method='POST' action='unverify.php'>";
    echo "<td> <button type='submit' name='verify_unverify' value='".$row['SPID']."'>".$type_button."</button> </td>";
    echo "</form>";
    }
    else {
      echo "<form method='POST' action='verify.php'>";
      echo "<td> <button type='submit' name='verify_unverify' value='".$row['SPID']."'>".$type_button."</button> </td>";
      echo "</form>";
    }
    echo "<form method='POST' action='delete.php'>";
    echo "<td> <button type='submit' name='toDelete' value='".$row['SPID']."'>Delete</button> </td>";
    echo "</form>";
    echo "</tr>";
    $count=$count+1;
}
?>
</table>
</body>
</html>
<?php 
}
else
{
	
}
 ?>
