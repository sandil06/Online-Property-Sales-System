<?php
include ('../conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Execute the query to check for the username
    $query = "SELECT `password` FROM `tbl_user` WHERE `username` = '$username'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        if ($password === $stored_password) {
            echo "
            <script>
                alert('Login Successfully!');
                window.location.href = 'http://localhost/property/home.php';
            </script>
            "; 
        } else {
            echo "
            <script>
                alert('Login Failed, Incorrect Password!');
                window.location.href = 'http://localhost/property/login.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Login Failed, User Not Found!');
                window.location.href = 'http://localhost/project7/login.php';
            </script>
            ";
    }
}
?>
