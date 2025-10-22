<!--asanka-->
<?php
include 'conn.php';

$id = $_GET['Id'];

$sql = "DELETE FROM location WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: all-locations.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

