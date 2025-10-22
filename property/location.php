<!--asanka-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="location.css">

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#map {
    height: 400px;  
    width: 100%;    
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

header {
            background-color: #687EFF;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 32px;
        
        }

.logo img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    float: left;
    position: relative;
    bottom:70px;
    right: 15px;
}
.logo p{
    float: left;
    position: relative;
    right: 65px;
    bottom:17px;
    font-weight: bold;
    font-size:12px;
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
            margin: 0 20px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #687EFF;
        }

main {
    display: flex;
    justify-content: space-around;
    padding: 30px;
}


h1{
    position: relative;
    font-size: 20px;
}

form {
    position: relative;
    top: 40px;
    right:5%;
    width: 60%;
    height: 0%;
    margin: 0 auto;
    
}

.dropdown{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select {
    width: 32%;
    padding: 10px;
    margin-bottom: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    width: 30%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    float: right;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.image{
    display: flex;
    text-align: center;
    position: relative;
    left: 10%;
}

section{
    position: absolute;
    top: 45%;
    left: 8%;
    width: 60%;
    
}

img{
    height: 20%;
    width: 20%;
    margin-left: 30px;

    
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
     

    <main>
        <h1>Add Location</h1>
<br><br>
        <form action="add-location.php" method="post">

            <div class ="dropdown">
            <select id="dropdown1" name="province">
                <option value="Western">Western</option>
                <option value="Central">Central</option>
                <option value="Eastern">Eastern</option>
                <option value="North Central">North Central</option>
                <option value="Northern">Northern</option>
                <option value="North Western">North Western</option>
                <option value="Sabaragamuwa">Sabaragamuwa</option>
                <option value="Southern">Southern</option>
                <option value="Uva">Uva</option>

            </select>
            
    
            <select id="dropdown2" name="district" >
            <option value="Ampara">Ampara</option>
<option value="Anuradhapura">Anuradhapura</option>
<option value="Badulla">Badulla</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Colombo">Colombo</option>
<option value="Galle">Galle</option>
<option value="Gampaha">Gampaha</option>
<option value="Hambantota">Hambantota</option>
<option value="Jaffna">Jaffna</option>
<option value="Kalutara">Kalutara</option>
<option value="Kandy">Kandy</option>
<option value="Kegalle">Kegalle</option>
<option value="Kilinochchi">Kilinochchi</option>
<option value="Kurunegala">Kurunegala</option>
<option value="Mannar">Mannar</option>
<option value="Matale">Matale</option>
<option value="Matara">Matara</option>
<option value="Monaragala">Monaragala</option>
<option value="Mullaitivu">Mullaitivu</option>
<option value="Nuwara Eliya">Nuwara Eliya</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Puttalam">Puttalam</option>
<option value="Ratnapura">Ratnapura</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Vavuniya">Vavuniya</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Mullaitivu">Mullaitivu</option>
<option value="Kilinochchi">Kilinochchi</option>


            </select>
            <div class="city">
            <input type="text" id="city" name="city" placeholder="City">

            </div>
        </div>
    
        <input type="submit" value="Submit">
        </form>

        <section>
            <div class="image">
            
                    <img src="https://img.freepik.com/free-photo/3d-render-house-countryside_1048-13116.jpg?t=st=1728165964~exp=1728169564~hmac=64671b88ce2b5edad13c87dd8b34e31fd8f5d72ce5a5611b3712c7df840657dd&w=1060" alt="">
                
                
                    <img src="https://img.freepik.com/free-photo/beautiful-architecture-building_74190-6332.jpg?t=st=1728166265~exp=1728169865~hmac=dc07effa451cb95cdeed167f4692517e4c9ba05d376a89b96b37cfe48131bb62&w=900" alt="">
                
                
                    <img src="https://img.freepik.com/free-photo/beautiful-landscape-with-clear-sky_23-2149721820.jpg?t=st=1728165682~exp=1728169282~hmac=dfd1764a547ebac0c800e6b24d8526cf464cd3e99706c430f4adbeb90d4381e4&w=1060" alt="">
            </div>
        </section>

        

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.796799000799!2d79.97059247363069!3d6.9148817930846365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1043cc37%3A0x5f43c37d11c72aa!2sSLIIT%20Main%20Building%2C%20Malabe!5e0!3m2!1sen!2slk!4v1728030758569!5m2!1sen!2slk" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    
    </main>

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

</body>
</html>
