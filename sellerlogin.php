<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Buttons with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="max-w-md mx-auto my-2 bg-white rounded-lg shadow-md p-4 sm:p-5">
    <div>
        <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login as seller</h2>
    </div>
    <div class="mt-4">
        <form class="space-y-3" action="profile.php" method="POST">
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                </div>
                <div class="mt-1">
                    <input id="username" name="sellerusername" placeholder="Enter your username" type="text" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-1">
                    <input id="password" name="sellerpassword" placeholder="Enter your password" type="text" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="flex w-full justify-center rounded-md bg-gray-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
            </div>
            <div style="margin-left: 25%">Login as seller :
                <a href="userlogin.php" class="text-center"><u>Customer</u></a>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php
include "footer.php";
?>
