<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Buttons with Tailwind CSS</title>
    <!-- Add the link to the Tailwind CSS CDN or import it based on your project setup -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="bg-white p-6 rounded-lg shadow-md w-96 mx-auto mt-5 mb-5">
    <h1 class="text-2xl font-semibold mb-4">Add product</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
            <input type="text" name="name" required minlength="2" placeholder="Product Name" class="border rounded-lg py-2 px-3 w-full mt-2 mb-1">
            <textarea type="text" name="description"  required minlength="2" placeholder="Write short description" class="border rounded-lg py-2 px-3 w-full mt-1 mb-2"></textarea>
            <input type="number" name="beforeprice" required minlength="2"  placeholder="Before price" class="border rounded-lg py-2 px-3 w-full mt-2 mb-2">
            <input type="number" name="afterprice" required minlength="2"  placeholder="After price" class="border rounded-lg py-2 px-3 w-full mt-2 mb-2">
            <input type="text" name="category" required minlength="2" placeholder="category" class="border rounded-lg py-2 px-3 w-full mt-2 mb-1">
            <label for="homeworkFile" class="block text-gray-700 font-bold mb-2 mt-2">Select a File:</label>
            <input type="file" name="fileToUpload" id="fileInput" class="border rounded-lg py-2 px-3 w-full">
        </div>
        <div class="mb-4">
            <input type="submit" value="Upload" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
        </div>
    </form>
</div>
</body>
</html>
<?php
include "footer.php";
?>
