<!--asanka-->
<?php
include ('./conn.php');

$province = $_POST['province'];
$district = $_POST['district'];
$city = $_POST['city'];


try {
        // Insert the new location
        $insertQuery = "INSERT INTO `location` (`province`, `district`, `city`) 
                        VALUES ('$province', '$district', '$city')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "
            <script>
                alert('Registered Successfully');
                window.location.href = 'http://localhost/property/login.php';
            </script>
            ";
        } else {
            echo "Error: " . $conn->error;
        }
    } 
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
<?php
// Redirect to another page
header("Location: all_location.php");
exit;
?>

