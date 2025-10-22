<!--bhagya-->
<?php
// Any PHP logic (like session handling or server-side validation) can be placed here.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions</title>

    <!-- Embedded CSS -->
    <style>
        /* General styles */
        body {
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

    <!-- Header and Navigation -->
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

    <!-- Main Content: Terms & Conditions -->
    <main>
        <section class="terms">
            <h1>Terms & Conditions</h1>
            <p>
                Welcome to our Terms & Conditions page. By accessing and using our Online Property Sales platform, you agree to the terms outlined below.
            </p>

            <h2>Use of Our Services</h2>
            <p>
                You agree to use our platform only for legitimate property transactions and to comply with all applicable laws and regulations. Any misuse, including fraudulent activities, unauthorized access, or illegal transactions, is strictly prohibited.
            </p>

            <h2>User Responsibilities</h2>
            <p>
                Users are responsible for maintaining the confidentiality of their account information and ensuring that all information provided during transactions is accurate and up-to-date. Any violations may result in account termination or legal action.
            </p>

            <h2>Limitation of Liability</h2>
            <p>
                Online Property Sales is not liable for any direct or indirect losses or damages arising from your use of the platform. We provide our services "as is" and make no warranties regarding the accuracy, reliability, or availability of the platform.
            </p>

            <h2>Amendments</h2>
            <p>
                We reserve the right to update or modify these Terms & Conditions at any time. Continued use of the platform signifies your acceptance of any changes.
            </p>

            <h2>Contact Information</h2>
            <p>
                If you have any questions or concerns regarding these Terms & Conditions, please contact us at <a href="mailto:support@domain.com">support@domain.com</a>
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
            <a href="#">Terms & Conditions |</a>
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

    <!-- Embedded JavaScript -->
    <script>
        // Simple JavaScript for logging when the page is loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Terms & Conditions page loaded successfully');
        });
    </script>

</body>
</html>
