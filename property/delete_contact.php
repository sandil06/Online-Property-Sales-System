<!--asanka-->
<?php include 'conn.php'; ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: all_contacts.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
