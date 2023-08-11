<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg'); window.location.href='index.php'</script>";
}
?>

<html>
<head>
<style>

</style>
</head>
<body>
<?php
include 'db_conn.php';
$serviceID=$_POST['service'];
$pin=$_POST['pin'];
$fullName=$_POST['fullName'];
$address=$_POST['address'];
$phoneNum=$_POST['phoneNum'];

if($serviceID==0)
{
    alert("PLEASE SELECT A VALID SERVICE TYPE!");
}
else {
try {
    $sql = "INSERT INTO serviceprovider (Name,SID,PIN, Address,PhoneNumber,Verified)
VALUES ('$fullName','$serviceID', '$pin', '$address','$phoneNum',0)";
    // use exec() because no results are returned
    $con->exec($sql);
    alert("New record created successfully");
  } catch(PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();
    alert("Some Error Occured!");
    
  }
}
?>
</body>
</html>