<?php
session_start();
include "nav.php";
//database details
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DosroBazar";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//for user login
//checking login from username and password
if (isset($_POST["username"])) {
    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Store data in session variables
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $query = "SELECT * FROM userlogin WHERE Username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // User found, retrieve name and address
        $row = $result->fetch_assoc();
        $_SESSION["userid"] = $row["id"];
        $name = $row["Name"];
        $userid = $row["Username"];
        $address = $row["address"];
        $contactnumber = $row["contactnumber"];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive Buttons with Tailwind CSS</title>
            <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <!-- Add the link to FontAwesome CDN for icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rAsso5DvNJdVHrHD4L8U+inCMNAsXDO8IIrm+fvFFFC2RZhMl+27VvKRno/yiNl/7vZDB0+X7CzEKBxk6VHebA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body class="bg-gray-100">
        <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
            <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
            <h2 class="text-center text-2xl font-semibold mt-3"><?php echo $name?></h2>
            <p class="text-center text-gray-600 mt-1">I am buyer</p>
            <div class="flex justify-center mt-2">
                <a href="logout.php" class="text-indigo-600 hover:text-blue-700">Log out</a>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Address</h3>
                <p class="text-gray-600 mt-2 text-center"></a><?php echo $address?></p>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Contact Information</h3>
                <p class="text-gray-600 mt-2 text-center">
                    Email Address: <span class="font-semibold"><?php echo $userid?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i><br>
                    Phone Number: <span class="font-semibold"><?php echo $contactnumber?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i>
                    <br>
                </p>
            </div>
        </div>
        </body>
        </html>
        <?php

    }
}
else if (isset($_SESSION["username"])) {
    // Get username and password from the form
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $query = "SELECT * FROM userlogin WHERE Username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // User found, retrieve name and address
        $row = $result->fetch_assoc();
        $name = $row["Name"];
        $userid = $row["Username"];
        $address = $row["address"];
        $contactnumber = $row["contactnumber"];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive Buttons with Tailwind CSS</title>
            <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <!-- Add the link to FontAwesome CDN for icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rAsso5DvNJdVHrHD4L8U+inCMNAsXDO8IIrm+fvFFFC2RZhMl+27VvKRno/yiNl/7vZDB0+X7CzEKBxk6VHebA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body class="bg-gray-100">
        <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
            <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
            <h2 class="text-center text-2xl font-semibold mt-3"><?php echo $name?></h2>
            <p class="text-center text-gray-600 mt-1">I am buyer</p>
            <div class="flex justify-center mt-2">
                <a href="logout.php" class="text-indigo-600 hover:text-blue-700">Log out</a>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Address</h3>
                <p class="text-gray-600 mt-2 text-center"></a><?php echo $address?></p>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Contact Information</h3>
                <p class="text-gray-600 mt-2 text-center">
                    Email Address: <span class="font-semibold"><?php echo $userid?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i><br>
                    Phone Number: <span class="font-semibold"><?php echo $contactnumber?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i>
                    <br>
                </p>
            </div>
        </div>
        </body>
        </html>
        <?php

    }
}

//for seller login
//checking login from username and password
if ($_POST["sellerusername"]) {
    // Get username and password from the form
    $username = $_POST["sellerusername"];
    $password = $_POST["sellerpassword"];
    // Store data in session variables
    $_SESSION["sellerusername"] = $username;
    $_SESSION["sellerpassword"] = $password;
    $query = "SELECT * FROM sellerlogin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // User found, retrieve name and address
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $userid = $row["id"];
        $_SESSION["sellerid"] = $userid;
        $username = $row["username"];
        $orgname = $row["orgname"];
        $address = $row["address"];
        $contactnumber = $row["contactnumber"];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive Buttons with Tailwind CSS</title>
            <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <!-- Add the link to FontAwesome CDN for icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rAsso5DvNJdVHrHD4L8U+inCMNAsXDO8IIrm+fvFFFC2RZhMl+27VvKRno/yiNl/7vZDB0+X7CzEKBxk6VHebA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body class="bg-gray-100">
        <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
            <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
            <h2 class="text-center text-2xl font-semibold mt-3"><?php echo $name?></h2>
            <p class="text-center text-gray-600 mt-1">I am seller from <?php echo $orgname?> company</p>
            <div class="flex justify-center mt-2">
                <a href="logout.php" class="text-indigo-600 hover:text-blue-700">Log out</a>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Address</h3>
                <p class="text-gray-600 mt-2 text-center"></a><?php echo $address?></p>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Contact Information</h3>
                <p class="text-gray-600 mt-2 text-center">
                    Email Address: <span class="font-semibold"><?php echo $username?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i><br>
                    Phone Number: <span class="font-semibold"><?php echo $contactnumber?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i>
                    <br>
                </p>
            </div>
            <div class="flex justify-center mt-4">
                <a href="viewproducts.php" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2 inline-block">View Products</a>

                <form action="add_products.php" method="post">
                    <!-- Form for "Add products" button -->
                    <!-- Add your form fields and submit button for "Add products" here -->
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md ml-2" type="submit">Add Products</button>
                </form>
            </div>
        </div>
        </body>
        </html>
        <?php

    }
}
elseif (isset($_SESSION["sellerusername"])){
    $username = $_SESSION["sellerusername"];
    $password = $_SESSION["sellerpassword"];
    $query = "SELECT * FROM sellerlogin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // User found, retrieve name and address
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $userid = $row["id"];
        $_SESSION["sellerid"] = $userid;
        $username = $row["username"];
        $orgname = $row["orgname"];
        $address = $row["address"];
        $contactnumber = $row["contactnumber"];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive Buttons with Tailwind CSS</title>
            <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <!-- Add the link to FontAwesome CDN for icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rAsso5DvNJdVHrHD4L8U+inCMNAsXDO8IIrm+fvFFFC2RZhMl+27VvKRno/yiNl/7vZDB0+X7CzEKBxk6VHebA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body class="bg-gray-100">
        <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
            <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
            <h2 class="text-center text-2xl font-semibold mt-3"><?php echo $name?></h2>
            <p class="text-center text-gray-600 mt-1">I am seller from <?php echo $orgname?> company</p>
            <div class="flex justify-center mt-2">
                <a href="logout.php" class="text-indigo-600 hover:text-blue-700">Log out</a>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Address</h3>
                <p class="text-gray-600 mt-2 text-center"></a><?php echo $address?></p>
            </div>
            <div class="mt-2">
                <h3 class="text-xl font-semibold text-center">Contact Information</h3>
                <p class="text-gray-600 mt-2 text-center">
                    Email Address: <span class="font-semibold"><?php echo $username?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i><br>
                    Phone Number: <span class="font-semibold"><?php echo $contactnumber?></span>
                    <i class="fas fa-edit text-blue-500 cursor-pointer ml-2"></i>
                    <br>
                </p>
            </div>
            <div class="flex justify-center mt-4">
                <a href="viewproducts.php" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2 inline-block">View Products</a>
                <a href="addproducts.php" class="bg-green-500 text-white px-4 py-2 rounded-md mr-2 inline-block">Add products</a>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}

if (!isset($_POST["username"]) && !isset($_POST["sellerusername"]) && !isset($_SESSION["username"]) && !isset($_SESSION["sellerusername"])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Buttons with Tailwind CSS</title>
        <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Add the link to FontAwesome CDN for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rAsso5DvNJdVHrHD4L8U+inCMNAsXDO8IIrm+fvFFFC2RZhMl+27VvKRno/yiNl/7vZDB0+X7CzEKBxk6VHebA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="bg-gray-100">
    <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
        <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
        <h2 class="text-center text-2xl font-semibold mt-3">Proceed to login / signup</h2>
        <div class="flex justify-center mt-2">
            <a href="userlogin.php" class="text-indigo-600 hover:text-blue-700">Login</a><p>&nbsp;&nbsp;/&nbsp;&nbsp;</p>
            <a href="usersignup.php" class="text-indigo-600 hover:text-blue-700">Sign Up</a>
        </div>
    </div>
    </body>
    </html>
    <?php
}
include "footer.php";
?>
