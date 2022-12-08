<?php
// include database connection file
include_once("db.php");

// Get id from URL to delete  user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//alert confirming data deleted
echo "<script>alert('Data deleted');</script>";
echo "<script>window.location.href = 'index.php'</script>";
?>

