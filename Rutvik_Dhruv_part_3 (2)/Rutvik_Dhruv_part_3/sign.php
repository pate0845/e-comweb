<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="upload.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>

<body>
    <div>
        <form class="design" method="POST" action="sign.php" enctype="multipart/form-data">
            <!-- Taking Users input to create Accoount  and  each term required so that users donot skip reqired information-->
            <!-- input F-Name-->
            <label for="add-name" class="col-form-label"> Name:</label><br><br>
            <input type="text" class="from-control" id="add-name" name="title" max="500" required><br><br>

            <label for="add-price" class="col-form-label"> Price:</label><br><br>
            <input type="text" class="from-control" id="add-price" name="price" required><br><br>

            <label for="add-ratings" class="col-form-label"> Ratings:</label><br><br>
            <input type="text" class="from-control" id="add-ratings" name="ratings" required><br><br>

            <label for="add-description" class="col-form-label"> description :</label><br><br>
            <input type="text" class="from-control" id="add-description" name="description" required><br><br>

            <label for="add-specification" class="col-form-label"> Specification:</label><br><br>
            <input type="text" class="from-control" id="add-specification" name="specification" required><br><br>

            <label for="add-specification2" class="col-form-label"> specification2:</label><br><br>
            <input type="text" class="from-control" id="add-specification2" name="specification2" required><br><br>

            <label for="add-alt" class="col-form-label"> Alt:</label><br><br>
            <input type="text" class="from-control" id="add-alt" name="alt" required><br><br>

            <label for="add-name" class="col-form-label"> Image:</label><br><br>
            <input type="file" class="from-control" id="add-image" name="image" required><br><br>
            <br><br><br><br>
            <!-- Submit Button -->
            <button type="submit" name="uload">submit</button>
        </form>
    </div>

    <?php

    //connecting to a database
    define('server', 'localhost');
    define('user', 'root');
    define('password', '');
    define('name', 'product_data');
    session_start();
    /* Establishing Connection with Database */
    $con = new mysqli(server, user, password, name) or die('error');
    // If a folllowing condition true the code will run 
    if (isset($_POST['uload'])) {

        $producttitle = $_POST['title'];
        $productprice = $_POST['price'];
        $productratings = $_POST['ratings'];
        $productdescription = $_POST['description'];
        $productspecification = $_POST['specification'];
        $productspecification2 = $_POST['specification2'];
        $productalt = $_POST['alt'];

        $files = $_FILES['image'];
        $filename = $files['name'];
        $filetmp = $files['tmp_name'];



        //moving images to the folder named images2
        $destinationfile = 'images2/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);

        //Insert Data into Database Query 
        $q = "INSERT INTO `product_data`(`title`, `image`,`description`, `price`,`specification`,`specification2`,
                                     `rating`,`alt`) VALUES ('$producttitle','$destinationfile','$productdescription','$productprice','$productspecification',
                                                    '$productspecification2','$productratings','$productalt')";
        $query = mysqli_query($con, $q);


        $displayquery = "select * from productdata";
        $querydisplay = mysqli_query($con, $displayquery);
    }
    ?>



    </tbody>
    </table>
    </div>
    </div>
</body>

</html>