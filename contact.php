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
    $description = $_POST['description'];

// Insert data into the database
    $sql = "INSERT INTO contact (name, email, description) 
        VALUES ('$name', '$email', '$description')";

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
    <title>Contact us</title>
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
        <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Contact Us</h2>
    </div>
    <div class="mt-4">
        <form class="space-y-3" action="contact.php" method="POST">
            <input type="text" name="name" required minlength="2" placeholder="Enter your name" class="border rounded-lg py-2 px-3 w-full mt-2 mb-1">
            <input type="email" name="email" required minlength="2"  placeholder="Enter your email" class="border rounded-lg py-2 px-3 w-full mt-2 mb-2">
            <textarea type="text" name="description"  required minlength="2" placeholder="Write about you" class="border rounded-lg py-2 px-3 w-full mt-1 mb-2"></textarea>
            <div class="mt-4">
                <button type="submit" class="flex w-full justify-center rounded-md bg-gray-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
            <div> If you want to buy products, Call Us :
                <a href="#" class="text-center"><u>+97798********</u></a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
include "footer.php";
?>
