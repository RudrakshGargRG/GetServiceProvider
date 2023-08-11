<?php
include 'db_conn.php';
$spid=$_POST['verify_unverify'];
echo $spid;

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();

// echo a message to say the UPDATE succeeded
echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
?>