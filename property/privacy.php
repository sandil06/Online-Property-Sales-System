<!--bhagya-->
<?php
// This block can contain any PHP code if needed (like session management, data fetching, etc.)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    
    <!-- Embedded CSS -->
    <style>
        /* General styles */
        body {s
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header and navigation */
        header {
            background-color: #1379ee;
            color: #fff;
            padding: 15px 0;
        }

        header nav ul {
            list-style: none;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            display: inline-block;
            margin: 0 15px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        /* Main content */
        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer */

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

    <!-- Navigation Bar -->
    <header>
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
    </header>

    <!-- Main Content -->
    <main>
        <section class="privacy-policy">
            <h1>Privacy Policy</h1>
            <p>
                Welcome to our Privacy Policy page. At Online Property Sales, we are committed to safeguarding the privacy of our users.
            </p>

            <h2>Information Collection</h2>
            <p>
                We collect information that you provide directly to us when using our services, such as when creating an account, searching for properties, or contacting us.
            </p>

            <h2>How We Use Your Information</h2>
            <p>
                We use the information collected to provide, maintain, and improve our services, including to facilitate transactions and provide customer support.
            </p>

            <h2>Security of Your Information</h2>
            <p>
                We take appropriate security measures to protect your personal information from unauthorized access or disclosure.
            </p>

            <h2>Contact Us</h2>
            <p>
                If you have any questions regarding this Privacy Policy, feel free to contact us at <a href="mailto:support@domain.com">support@domain.com</a>
            </p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-contact">
            <p>Need Any Support?</p>
            <p>Call: 0177-225328</p>
            <p>Mail: support@domain.com</p>
        </div>
        <div class="footer-links">
            <a href="About us.php">About us |</a>
            <a href="condition.php#">Terms & Conditions |</a>
            <a href="#">Privacy Policy</a>
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


    <!-- Embedded JavaScript -->
    <script>
        // Script to show a simple alert when the privacy policy page is loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Privacy Policy page loaded successfully');
        });
    </script>

</body>
</html>
