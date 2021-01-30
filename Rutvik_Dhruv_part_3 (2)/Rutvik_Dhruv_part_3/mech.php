
<!DOCTYPE html>
<html>

<head>
    <title>Atlantis Watch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="images/Icon.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background:white">
    <!-- Top Navigation Bar-->
    <div class="topnav">
        <!--Left Portion-->
        <a class="active" href="project.php"><img src="images/LOGO.jpeg"></a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="mech.php">Products</a>
        <a href="sign.php">Add Products</a>
        <!--Right Portion-->
        <div class="topnav-right">
            <form method ="GET" action="mech.php" >
                <input style=" margin-top:13px;height:31px;width:200px;color:white" type="text" placeholder="Search.." name="search" id="search"  autocomplete=off>
                <button style="width:30px" type="submit" value="search"><i class="fa fa-search"></i></button>
            </form>

            <a><img src="images/icon_retail_1250_1250colo-255-255-255-0.png"></a>
            <a href="signin.php"><i class="fa fa-fw fa-user"></i> Sign UP</a>
        </div>
    </div>
    <!-- Body Text -->
    <div style="background:white">
        <?php
        /* Server and Database Info */
        define('server', 'localhost');
        define('user', 'root');
        define('password', '');
        define('name', 'product_data');

        session_start();
        /* Establishing Connection with Database */
        $con = new mysqli(server, user, password, name) or die('error');
        /* method for Search Bar  */
        if (isset($_GET['search'])) {
            $query = $_GET['search'];
            $query = htmlspecialchars($query);
            $query = mysqli_real_escape_string($con, $query);
            /* SQL query statements to find data from databse */
            $raw_results = mysqli_query($con, "SELECT * FROM product_data WHERE (`title` LIKE '%$query%')");
            if (mysqli_num_rows($raw_results) > 0) {
                while ($results = mysqli_fetch_array($raw_results)) {
        ?>
                    <!-- To load search product details -->

                    <div class="watches" style="background:black">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="productPage.php?id=<?php echo $results['id'] ?>">
                                <div class="card h-100">
                                    <div class="column">
                                        <img src="<?php echo $results['image']; ?>">
                                        <div class="card-body" style="background:black;color:white;">
                                            <h5 class="card-title"><?php echo $results['title']; ?></h5>
                                            <h5 style="color:white;margin-top:20px">$<?php echo $results['price']; ?></h5>
                                            <p style="color:yellow">Rating: <?php echo $results['rating']; ?>/5</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php
                }
            }
        } else {
            /* SQL Query Statement to get data from product_data table */
            $stmt = "SELECT * FROM product_data";
            $result = mysqli_query($con, $stmt);
            $resultcheck = mysqli_num_rows($result);
            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- To load database product details in format -->
                    <div class="watches" style="background:black">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="column">
                                    <a href="productPage.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image']; ?>"></a>
                                    <div class="card-body" style="background:black;color:white;">
                                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                        <h5 style="color:white;margin-top:20px">$<?php echo $row['price']; ?></h5>
                                        <p style="color:yellow">Rating: <?php echo $row['rating']; ?>/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
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
