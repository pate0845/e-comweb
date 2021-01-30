<!DOCTYPE html>
<html>

<head>
    <title>Atlantis Watch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="images/Icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Script to intruduce Array-->

</head>

<body style="background: white;">
    <!-- Top Navigation Bar -->
    <div class="topnav">
        <a class="active" href="project.php"><img src="images/LOGO.jpeg"></a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="mech.php">Products</a>
        <div class="topnav-right">
            <form method="GET" action=mech.php>
                <input type="text" placeholder="Search.." name="search" id="search" style="color:white" autocomplete=off>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <a><img src="images/icon_retail_1250_1250colo-255-255-255-0.png"></a>
            <a href="sign.php"><i class="fa fa-fw fa-user"></i> Sign UP</a>
        </div>
    </div>
    <!--Creating Container and Splitting it into 2 using another div-->
    <div class="Small Container productA">
        <div class="rowA">
            <!-- Product Preview image-->
            <div class="columnA">
                <?php
                define('server', 'localhost');
                define('user', 'root');
                define('password', '');
                define('name', 'product_data');

                session_start();
                /* Establishing connection with Database*/
                $con = new mysqli(server, user, password, name) or die('error');
                $r = $_GET['id'];
                /* SQL Query Statement */
                $stmt = "SELECT * FROM product_data WHERE id='$r'";
                $result = mysqli_query($con, $stmt);
                $resultcheck = mysqli_num_rows($result);
                if ($resultcheck > 0) {
                    /* TO obtain Product Main Image */
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <img id="image" src="<?php echo $row['image'] ?>" width="100%">
                        <!-- For Arraging small product images-->
                        <div class="small-row">
                            <div class=" small-column">
                                <img src="images/Odyssey_Two_Tone_Gold_Blue_Link_Caseback_Comp_002_1_1800x1800.jpg" width="100%">
                            </div>
                            <div class=" small-column">
                                <img src="images/Odyssey_Two_Tone_Gold_Blue_Link_FrontSide_Export_0000_1800x1800.jpg" width="100%">
                            </div>
                            <div class=" small-column">
                                <img src="images/Odyssey_Two_Tone_Gold_Blue_4159410074914211_300x.jpg" width="100%">
                            </div>
                            <div class=" small-column">
                                <img src="images/Odyssey_Two_Tone_Gold_Blue_3159410073806510_300x.jpg" width="100%">
                            </div>
                            <div class=" small-column">
                                <img src="images/488x488_specifications_odyssey_two_tone_gold_blue_link16016363810907.jpg" width="100%">
                            </div>
                        </div>
            </div>
            <!-- Right Side portion of the pafge consisting product details-->
            <div class="columnA">
                <p>Home/Luxury Watches</p>
                <!-- invoking Title of the watch H1 heading Tag-->
                <h1 id="title"><?php echo $row['title']; ?> </h1>
                <h4>$<span id='price'><?php echo $row['price']; ?></span></h4>
                <!-- Size Selector -->
                <select>
                    <option>Select Size </option>
                    <option>44mm</option>
                    <option>42mm</option>
                    <option>40mm</option>
                    <option>38mm</option>
                </select>
                <!-- Quantity Selector -->
                <input style="color: black;" type="number" value="1" id=" Roy">

                <button class="cart" type="button">Add to Cart</button>

                <h3>Ratings :<?php echo $row['rating']; ?> <span id='rating'></span>/5</h3>

                <h3>Product Details</h3>
                <!-- For Description -->
                <p id="description">
                    <?php echo $row['description']; ?>
                </p>
                <!-- For Specifications  -->
                <h3>Specifications</h3>
                <ul id="specification">
                    <?php
                        echo $row['specification'] . "<br>";
                        echo $row['specification2'];
                    ?>
                </ul>
            </div>
        </div>
    </div>
<?php
                    }
                }
?>
<!-- Footer -->
<div class="footer">
    <div class="footer-I">
        <div class="footer-core">
            <h2>Atlantis Watches</h2>
            <p> The place where you can find Premium Quality Products</p>
        </div>
        <div class="footer-core">
            <h3>Quick List</h3>
            <div class="border"></div>
            <ul>
                <li>Home</li>
                <li>Contact</li>
                <li>About</li>
                <li>Smart watches</li>
                <li>Analog Watches</li>
                <li>Luxury Watches</li>
                <li>Mechanical Watches</li>
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
                <li>Order Status</li>
                <li>Product Registartion</li>
                <li>FAQ</li>
                <li>Returns & Exchange</li>
                <li>Gift Services</li>
                <li>Battery Replacement</li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>