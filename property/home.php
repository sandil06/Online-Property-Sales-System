<!--bhagya-->
<?php include ('./conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login System</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        footer {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background-color: #687EFF;
    color: #fff;
}

footer .footer-contact p, footer .footer-links a, footer .footer-social a {
    margin-bottom: 10px;
}

footer .footer-links a, footer .footer-social a {
    color: #fff;
    text-decoration: none;
}
.footer-links a{
    
    
}

.footer-social{
    display:grid;
    grid-template-columns: auto auto;

}

.footer-social img{
    width: 25%;
    height: 70%;
    border-radius: 50%;
}
    </style>

</head>
<body>
    
<header>
    <div class="container">
        <h1>Property Management System</h1>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="add_property.php">Add Property</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="contact_us.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>



            </ul>
        </nav>
    </div>
</header>


    <div class="main">
        <div class="content">
            <h4>List of users</h4>
            <hr>
            <table class="table table-hover table-collapse">
                <thead>
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    
                       // Execute the query to fetch all users
$query = "SELECT * FROM `tbl_user`";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    // Fetch all rows as an associative array
    while ($row = $result->fetch_assoc()) {
        // Access data using $row['column_name']
        echo "<tr>";
        echo "<td>" . $row['tbl_user_id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['contact_number'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>
                <a href='edit-user.php?id=" . $row['tbl_user_id'] . " '>Edit</a> | 
                <a href='user/delete-user.php?user=" . $row['tbl_user_id'] . "'>Delete</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No users found</td></tr>";
}

// Close the database connection
$conn->close();
?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Delete user
        function delete_user(id) {
            if (confirm("Do you want to delete this user?")) {
                window.location = "./user/delete-user.php?user=" + id;
            }
        }
    </script>
    
    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
<footer>
        <div class="footer-contact">
            <p>Need Any Support?</p>
            <p>Call: 0177-225328</p>
            <p>Mail: support@domain.com</p>
        </div>
        <div class="footer-links">
            <a href="About us.php">About us |</a>
            <a href="condition.php">Terms & Conditions |</a>
            <a href="privacy.php">Privacy Policy</a>
        </div>
        <div class="footer-social">
            <div class="twitter">
            <a href="#"><img src="https://i.pinimg.com/564x/7d/44/d5/7d44d55ead7dda48bd95632d92fb259d.jpg" alt="Twitter"></a>

            </div>
            <div class="google">
            <a href="#"><img src="https://i.pinimg.com/564x/39/21/6d/39216d73519bca962bd4a01f3e8f4a4b.jpg" alt="Google"></a>

            </div>
            <div class="facebook">
            <a href="#"><img src="https://i.pinimg.com/564x/bf/70/a6/bf70a612edf2ce2b7b80865989d6df0a.jpg" alt="Facebook"></a>

            </div>
            <div class="insta">
            <a href="#"><img src="https://i.pinimg.com/564x/30/8b/49/308b4978318a5ac83e6b128c32504742.jpg" alt="Instagram"></a>

            </div>

        </div>
    </footer>
</html>