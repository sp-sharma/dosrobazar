<?php
// Check if the form was submitted
if (isset($_POST["name"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size limit as needed)
    if ($_FILES["fileToUpload"]["size"] > 500000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file types (you can add more types if needed)
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg") {
        echo "Sorry, oppp-pnly JPG, JPEG and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is OK, try to upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // Store session username and file name in the database
            session_start(); // Start or resume the session
            $userid = $_SESSION["sellerid"];// Assuming you have a session variable for username
            $name = $_POST["name"];
            $description = $_POST["description"];
            $beforeprice = $_POST["beforeprice"];
            $afterprice = $_POST["afterprice"];
            $category = $_POST["category"];
            $uploadedFileName = basename($_FILES["fileToUpload"]["name"]);

            $conn = new mysqli("localhost", "root", "root", "DosroBazar");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert data into the 'uploaded_files' table
            $sql = "INSERT INTO products (name, description, beforePrice,afterPrice,category,filename,sellerid) VALUES ('$name','$description','$beforeprice', '$afterprice','$category','$uploadedFileName','$userid')";

            if ($conn->query($sql) === true) {
                echo "The file " . htmlspecialchars($uploadedFileName) . " has been uploaded and data has been recorded.";
                header('Location:viewproducts.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            header('Location:homework.php');
        }
    }
}
?>