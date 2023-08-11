<?php
include 'db_conn.php';
$spid=$_POST['toDelete'];
//echo $spid;

$sql = "DELETE from serviceprovider WHERE SPID=".$spid;
// Prepare statement
$stmt = $con->prepare($sql);

// execute the query
$stmt->execute();

// echo a message to say the UPDATE succeeded
try{
echo $stmt->rowCount() . " records UPDATED successfully";
header("Location:http://localhost/majboori.com/admin/index.php");
}
 catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
?>