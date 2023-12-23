<?php
include 'nav.php';
?>
    <html>
    <head>
        <title>Dosro Bazar - Home</title>
    </head>
    <body class="bg-gray-100">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 m-10">
        <div class="relative w-full max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
            <a href="#">
                <img class="h-60 rounded-t-lg object-cover" src="sprite.jpg" alt="product image" style="width: 100%"/>
            </a>
            <span class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">Sale</span>
            <div class="mt-4 px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-slate-900">Nike Air MX Super 5000</h5>
                </a>
                <p class="text-gray-700 mt-2">Premium quality athletic shoes with advanced cushioning technology for ultimate comfort and style. Perfect for your active lifestyle.</p>
                <div class="flex items-center justify-between mt-2">
                    <p>
                        <span class="text-3xl font-bold text-slate-900">$249</span>
                        <span class="text-sm text-slate-900 line-through">$299</span>
                    </p>
                    <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-2 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Add to cart
                    </a>
                    <a href="#" class="flex items-center rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 ml-4">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>
<?php
include "footer.php";
?>