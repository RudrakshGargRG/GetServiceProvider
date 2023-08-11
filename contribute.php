<html>
<head>
  
<style>
select {
  width: 15%;
  padding: 16px 20px;
  border: groove;
  border-radius: 10px;
  background-color: #f1f1f1;
  position:fixed;
  left: 40%;
  top:5%;
}
input[type=text] {
  border: 3px ridge #555;
  box-sizing: border-box;
  padding: 12px 20px;
  margin: 8px 0;
  position: center;
  left: 615px;
  top: 90px;
  position:relative;
}
input[type=submit] {
    position:fixed; 
  left: 44%;
  top: 59%;


  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


</style>
</head>
<body>
<div class="container">
<form action="contribute_submit.php" method="POST">
<select name="service" id="service">
<option value="0">Select Service</option>
<?php
include "db_conn.php";
$stmt = $con->query("SELECT * FROM services");
while ($row = $stmt->fetch()) 
{
    echo "<option value=$row[SID]>$row[Service]</option>"; 
}
?>
<br>
<br>
</select>
<input type="text" name="fullName" placeholder="Full Name">
<br/>
<br/>
<input type="text" name="address" placeholder="Address">
<br/>
<br/>
<input type="text" name="phoneNum" placeholder="Phone Number">
<br/>
<br/>
<input type="text" name="pin" placeholder="PIN">
<br/>
<br/>
<input type="submit">
</form>
</div>
</body>
</html>