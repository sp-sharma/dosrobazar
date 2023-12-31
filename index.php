<?php
session_start();
include "nav.php";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DosroBazar";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    // SQL query to retrieve uploads with sellerid 1
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        ?>
        <html>
        <head>
            <title>Dosro Bazar - Home</title>
        </head>
        <body class="bg-gray-100">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 m-10">
            <?php
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $userid = $_SESSION["userid"];
                $id = $row["id"];
                $name = $row["name"];
                $description = $row["description"];
                $beforeprice = $row["beforePrice"];
                $afterprice = $row["afterPrice"];
                $category = $row["category"];
                $fileName = $row["filename"];
                ?>
                <div class="relative w-full max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="#">
                        <img class="h-60 rounded-t-lg object-cover" src="uploads/<?php echo $fileName; ?>" alt="product image" style="width: 100%" />
                    </a>
                    <span class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">Sale</span>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-slate-900"><?php echo $name?></h5>
                        </a>
                        <p class="text-gray-700 mt-2"><?php echo $description?></p>
                        <div class="flex items-center justify-between mt-2">
                            <p>
                                <span class="text-3xl font-bold text-slate-900"><?php echo $beforeprice?></span>
                                <span class="text-sm text-slate-900 line-through"><?php echo $afterprice?></span>
                            </p>
                        </div>
                        <div class="ml-5 inline-block">
                            <div class="flex">
                                <a href="contact.php" class="bg-green-500 text-white px-4 py-2 rounded-md mt-4 hover:bg-green-600 transition duration-300">Buy Now</a>
                                <form action="cart.php" method="post"  class="ml-2">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md mt-4 hover:bg-blue-600 transition duration-300">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                        </div>
                </div>
                <?php
            }
            ?>
        </div>
        </body>
        </html>
        <?php
    }
?>
<?php
include "footer.php";
?>