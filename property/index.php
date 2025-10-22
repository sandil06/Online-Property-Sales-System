<!--sandil-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #687EFF;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

.logo img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    float: left;
    position: relative;
    bottom:70px;
    left: 15px;
}
.logo p{
    float: left;
    position: relative;
    left: -36px;
    bottom :28px;
    font-weight: bold;
    font-size:12px;
}

        header h1 {
            margin: 0;
            font-size: 32px;
        }

        nav {
            background-color: #80B3FF;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #687EFF;
        }

        /* Image Slider */
        .slider {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            max-height: 700px; /* Increased the maximum height for larger images */
            object-fit: cover;
        }

        .slider-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-controls button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }

        .features {
            text-align: center;
            padding: 50px 20px;
            background-color: #98E4FF;
        }

        .features h2 {
            font-size: 28px;
            color: #687EFF;
        }

        .features .feature-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .feature-item {
            background-color: white;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-item h3 {
            font-size: 20px;
            color: #687EFF;
            margin-bottom: 10px;
        }

        

        @media (max-width: 1200px) {
            .slider img {
                max-height: 600px; /* Slightly reduced height for smaller screens */
            }

            .feature-item {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 24px;
            }

            nav a {
                margin: 0 10px;
                font-size: 14px;
            }

            .slider img {
                max-height: 500px; /* Further reduced height for tablets */
            }

            .features .feature-grid {
                flex-direction: column;
                align-items: center;
            }

            .feature-item {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            nav a {
                display: block;
                margin: 10px 0;
            }

            .slider img {
                max-height: 400px; /* Reduced height for mobile devices */
            }

            .features h2 {
                font-size: 22px;
            }

            .feature-item {
                width: 90%;
            }

            
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
        <h1>Property Management Platform</h1>
        
    </header>
    <div class="logo">
            <img src="https://img.freepik.com/free-photo/3d-rendering-cartoon-house_23-2150188309.jpg?t=st=1728154701~exp=1728158301~hmac=b563f994c4cf12e16bbf6b597c48756e1e281bdf76b92abe8bfefd01c9e04494&w=740" alt="">
            <p>Easy Mart</p>
        </div>

    <nav>
                <a href="index.php">Home</a>
                <a href="add_property.php">Add Property</a>
                <a href="location.php">Location</a>
                <a href="contact_us.php">Contact</a>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
    </nav>

    <div class="slider">
        <div class="slides">
            <img src="https://img.freepik.com/free-photo/hand-presenting-model-house-home-loan-campaign_53876-104970.jpg" alt="Slide 1">
            <img src="https://img.freepik.com/free-photo/beautiful-landscape-with-small-village_23-2149721819.jpg?t=st=1728169928~exp=1728173528~hmac=6f31838c52d778209dc7f1e1b3f816c5b68be8e7a049771a91650bc84570d77a&w=1060" alt="Slide 2">
            <img src="https://img.freepik.com/free-photo/observation-urban-building-business-steel_1127-2397.jpg?t=st=1728170028~exp=1728173628~hmac=17a3d26e1c1574d25dfb281d96fad0cbfbc912eebd81ffd811d1eddf885f9ff8&w=900" alt="Slide 3">
            <img src="https://img.freepik.com/free-photo/mumbai-skyline-skyscrapers-construction_469504-21.jpg?t=st=1728166212~exp=1728169812~hmac=748f6b44e5778d04b79f7edda0bbf8a81ac5edf28109b1c24928dead94250b15&w=900" alt="Slide 4">
            <img src="https://img.freepik.com/free-photo/charming-yellow-house-with-wooden-windows-green-grassy-garden_181624-8074.jpg?t=st=1728169962~exp=1728173562~hmac=5662be842f287c0269437589588f613454e624d88c06a22238d18b11a959146a&w=900" alt="Slide 5">
            <img src="https://img.freepik.com/free-photo/small-houses-green-field-with-dark-sky_181624-248.jpg?t=st=1728170160~exp=1728173760~hmac=699a5505a1f08b3520efea74446e61170a2b17758976f8d748db1b3311108184&w=900" alt="Slide 6">
        </div>
        <div class="slider-controls">
            <button id="prevBtn">&lt;</button>
            <button id="nextBtn">&gt;</button>
        </div>
    </div>

    <section class="features">
        <h2>Platform Features</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Easy Tenant Management</h3>
                <p>Effortlessly manage your tenants with a simple and intuitive interface.</p>
            </div>
            <div class="feature-item">
                <h3>Automated Rent Collection</h3>
                <p>Collect rent automatically and keep track of all payments in one place.</p>
            </div>
            <div class="feature-item">
                <h3>Maintenance Tracking</h3>
                <p>Log, track, and complete maintenance requests with ease.</p>
            </div>
            <div class="feature-item">
                <h3>Financial Reporting</h3>
                <p>Get detailed financial reports to stay on top of your property finances.</p>
            </div>
        </div>
    </section>

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

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = slides.children.length;

        document.getElementById('nextBtn').addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        });

        document.getElementById('prevBtn').addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        });
    </script>

</body>
</html>
