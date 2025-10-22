<!--asanka-->
<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>

    <style>
        .logo img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    float: left;
    position: relative;
    bottom:55px;
    left: 15px;
}
.logo p{
    float: left;
    position: relative;
    left: -36px;
    bottom :14px;
    font-weight: bold;
    font-size:12px;
}

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
<div class="logo">
            <img src="https://img.freepik.com/free-photo/3d-rendering-cartoon-house_23-2150188309.jpg?t=st=1728154701~exp=1728158301~hmac=b563f994c4cf12e16bbf6b597c48756e1e281bdf76b92abe8bfefd01c9e04494&w=740" alt="">
            <p>Easy Mart</p>
        </div>

<h1>Contact Us</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact_success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea><br>

    <input type="submit" value="Send Message">
</form>

<footer>
        <div class="footer-contact">
            <p>Need Any Support?</p>
            <p>Call: 0177-225328</p>
            <p>Mail: support@domain.com</p>
        </div>
        <div class="footer-links">
            <<a href="About us.php">About us |</a>
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

</body>
</html>
