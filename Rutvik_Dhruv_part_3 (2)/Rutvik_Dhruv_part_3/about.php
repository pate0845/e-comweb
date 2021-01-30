<!DOCTYPE html>
<html>

<head>
    <title>Atlantis Watch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="images/Icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Top Navigation Bar-->
    <div class="topnav">
        <!--Left Portion-->
        <a class="active" href="project.php"><img src="images/LOGO.jpeg"></a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="mech.php">Products</a>
        <!--Right Portion-->
        <div class="topnav-right">
            <form method="GET" action=mech.php>
                <input type="text" placeholder="Search.." name="search" id="search" style="color:white" autocomplete=off>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <a><img src="images/icon_retail_1250_1250colo-255-255-255-0.png"></a>
            <a href="sign.php"><i class="fa fa-fw fa-user"></i> Sign UP</a>
        </div>
    </div>
    <!-- Body Text -->
    <h1 style="color: crimson;">About US</h1>
    <!-- Footer -->
    <div class="footer">
        <div class="footer-I">
            <div class="footer-core">
                <h2>Atlantis Watches</h2>
                <p> The place where you can find Premium Quality Products</p>
            </div>
            <!-- Creating Un-order -->
            <div class="footer-core">
                <h3>Quick</h3>
                <div class="border"></div>
                <ul>
                    <li>Contact</li>
                    <li>Home</li>
                    <li>Smart watches</li>
                    <li>Analog Watches</li>
                    <li>Luxury Watches</li>
                    <li>Mechanical Watches</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="footer-core">
                <h3>Need Help?</h3>
                <div class="border"></div>
                <ul>
                    <li>Support.AW.com</li>
                    <li>Feedback</li>
                </ul>
            </div>
            <div class="footer-core">
                <h3>Customer Status</h3>
                <div class="border"></div>
                <ul>
                    <li>Product Registartion</li>
                    <li>FAQ</li>
                    <li>Returns & Exchange</li>
                    <li>Gift Services</li>
                    <li>Battery Replacement</li>
                    <li>Order Status</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>