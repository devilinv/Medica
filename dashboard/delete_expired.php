<?php

session_start();

$expiry_date = $_GET['expiry_date'];


require "includes/conn.php";
														
$sql ="DELETE FROM pharmacy_stock WHERE expiry_date = $expiry_date";

$res = mysqli_query($conn,$sql);

echo "Medicine removed";

//header("Location: dashboad.php");
?>