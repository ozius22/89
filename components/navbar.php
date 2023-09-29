<?php include 'template.php'; ?>

<header class="border-b border-gray-200 lg:rounded-b-full items-center justify-between fixed top-0 left-0 md:flex-row flex flex-row-reverse px-8 lg:px-24 w-screen bg-white z-10">
        <div class="items-center gap-2 md:flex">
        <button id="menu-toggle" class="bg-blue-500 text-white p-2">Toggle Menu</button>

            <div id="menu" class="bg-white w-64 h-screen fixed top-0 right-0 transform translate-x-full transition-transform duration-300 ease-in-out">
            <!-- Menu content goes here -->
            <a class="text-sm sm:text-2xl font-bold tracking-wider text-yellow-500 hover:text-yellow-400 transition-all py-4" href="index.php">The Filipino Cuisine</a>
            </div>
            
            <nav class="hidden md:block text-sm">
                <ul class="flex justify-center gap-2 font-bold text-gray-500 underline-offset-4 transition-all">
                    <li class="decoration-yellow-400 decoration-2 hover:text-gray-900 transition-all hover:underline"><a class="py-4" href="Recipes.php">Cook now</a></li>
                    <li class="decoration-yellow-400 decoration-2 hover:text-gray-900 transition-all hover:underline"><a class="py-4" href="about.php">About</a></li>
                </ul>
            </nav>
        </div>

        <a class="text-sm sm:text-2xl font-bold tracking-wider text-yellow-500 hover:text-yellow-400 transition-all py-4" href="index.php">The Filipino Cuisine</a>
        
        <div class="sm:flex items-center gap-2 hidden">
            <nav class="sm:hidden md:flex text-sm">
                <ul class=" flex gap-2 font-bold text-gray-500 underline-offset-4 transition-all">
                    <li class="decoration-yellow-400 decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="form.php">Sign in</a></li>
                </ul>
            </nav>
            <a href="recipes.php"><img class="md:block hidden w-8 opacity-50 cursor-pointer hover:opacity-100 py-4" src="img/search-button.png" alt="Just another search-button"></a>
        </div>   
</header>

