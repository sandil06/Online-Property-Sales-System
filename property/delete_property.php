<!--sandil-->
<?php include 'conn.php'; ?>

<?php
// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the confirmation parameter is set to proceed with deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $sql = "DELETE FROM properties WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: all_properties.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // If not confirmed, show the confirmation message
        echo "<script>
                if (confirm('Are you sure you want to delete this property?')) {
                    window.location.href = 'delete_property.php?id=$id&confirm=true';
                } else {
                    window.location.href = 'all_properties.php';
                }
              </script>";
    }
} else {
    echo "No ID provided for deletion.";
}

$conn->close();
?>
