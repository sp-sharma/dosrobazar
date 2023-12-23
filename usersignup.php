<?php
include "nav.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "DosroBazar";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $organizationname = $_POST['organizationname'];
    $address = $_POST['address'];
    $contactnumber = $_POST['contactnumber'];

// Insert data into the database
    $sql = "INSERT INTO userlogin (name, username, password, address, contactnumber) 
        VALUES ('$name', '$username', '$password', '$address', '$contactnumber')";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close the database connection
    $conn->close();
}
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
<div class="max-w-md mx-auto my-2 bg-white rounded-lg shadow-md p-4 sm:p-5">
    <div>
        <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register as customer</h2>
    </div>
    <div class="mt-4">
        <form class="space-y-3" action="usersignup.php" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                <div class="mt-1">
                    <input id="text" placeholder="Enter your name " name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-1">
                    <input id="email" name="email" placeholder="Enter your email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-1">
                    <input id="password" name="password" placeholder="Enter your password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                </div>
                <div class="mt-1">
                    <input id="address" name="address" placeholder="Enter your address" type="text" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>
                </div>
                <div class="mt-1">
                    <input id="contactnumber" name="contactnumber" placeholder="Enter your contact number" type="text" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="flex w-full justify-center rounded-md bg-gray-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
            </div>
            <div style="margin-left: 25%">Sign up as seller :
                    <a href="sellersignup.php" class="text-center"><u>Seller</u></a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
include "footer.php";
?>
