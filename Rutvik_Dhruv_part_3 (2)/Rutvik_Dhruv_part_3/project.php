<!DOCTYPE html>
<html>

<head>
    <title>Atlantis Watch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="images/Icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Top Navigation Bar -->
    <div class="topnav">
        <!--Left Portion-->
        <a class="active" href="project.php"><img src="images/LOGO.jpeg"></a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="mech.php">Products</a>
        <!--Right Portion-->
        <div class="topnav-right">
            <!-- Search Bar-->
            <form method="GET" action="mech.php">
                <input type="text" placeholder="Search.." name="search" id="search" style="color:white" autocomplete=off>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <a><img src="images/icon_retail_1250_1250colo-255-255-255-0.png"></a>
            <a href="sign.php"><i class="fa fa-fw fa-user"></i> Sign UP</a>
        </div>
    </div>
    <!-- Creating Container class to set up images on front page and Writing text with the use of h3 tag-->
    <div class="container">
        <!-- Refrencing all the images to product page -->
        <a class="Product" href="mech.php"><img src="images/apple-watch-series-4_3nm9.jpg"></a>
        <div class="First" style="color: white;">
            <h3>
                Our line of fitness trackers and smartwatches helps you track your activity, then save, plan and share your progress with others.
                By helping you move a little more each day, you can beat yesterday with the devices that fit your fitness level and preferred sport.
            </h3>
        </div>
        <a class="Product" href="mech.php"><img src="images/fossil-watch-650x366.jpg"></a>
        <div class="Second" style="color: white;">
            <h3>
                Atlantis Watch are a Contemporary blemd of traditional hamds and modern LCD displays.
                proven reliability combined with the latest digital technology provides the best of both past and future.
                the results is a remarkably technical timepiece.
            </h3>
        </div>
        <a class="Product" href="mech.php"><img src="images/Diamonds_Header_23175427794585_jpg.jpg"></a>
        <div class="third" style="color: white;">
            <h3>
                Atlantis watches offers a selection of the finest luxury watches for men and women.
                Iconic styles in automatic watches and manual watches feature the latest technological advances.
                Extraordinary designs feature stainless steel, rose gold, yellow gold, or leather straps
            </h3>
        </div>
        <a class="Product" href="mech.php"><img src="images/Mechanic_watche.jpg"></a>
        <div class="fourth" style="color: white;">
            <h3>
                Time-slowing craftsmanship
                We believe in our watchmakers' crafts. Not some mindless assembly lines.
            </h3>
        </div>
    </div>
    <!-- At the bottom for Feature products -->
    <h2 style="color: white;">Feature Products</h2>
    <div class="watches">
        <div class="row1">
            <div class="column1">
                <img src="Smart watches/watch 3.jpg" alt="sam" style="width:100%">
                <h4 style="color:white">Galaxy Watch 3 Men</h4>
                <p style="color:white">$440.00</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-o checked"></span>
            </div>
            <div class="column1">
                <img src="Luxury watches/armani-watchjpg.jpg" alt="se" style="width:100%">
                <h4 style="color:white"> Emporio Armani (Limited Edition)</h4>
                <p style="color:white">$550.00</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star" style="color: white"></span>
            </div>
            <div class="column1">
                <img src="mechanical watches/Fossil.jpg" alt="Fossil" style="width:100%">
                <h4 style="color:white">Fossil Anniversry Edition</h4>
                <p style="color:white">$365.00</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half-o checked"></span>
            </div>
            <div class="column1">
                <img src="Smart watches/apple s6.jpg" alt="Huwai" style="width:100%">
                <h4 style="color:white">Apple Series 6 (Red Case)</h4>
                <p style="color:white">$959.00</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="footer-I">
            <div class="footer-core">
                <h2>Atlantis Watches</h2>
                <p> The place where you can find Premium Quality Products</p>
            </div>
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