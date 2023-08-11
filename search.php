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
  left: 40.5%;
  top: 15%;
  position:fixed;
}

input[type=submit] {
  /* border: 3px solid;
  box-sizing: border-box;
  padding: 12px 20px;
  margin: 8px 0; */
  position:fixed; 
  left: 44%;
  top: 25%;
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
<form action="search_results.php" method="POST">
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
</select>
<br/>
<br/>
<input type="text" name="pin" placeholder="PIN">
<br/>
<br/>
<input type="submit">
</form>
</body>
</html>