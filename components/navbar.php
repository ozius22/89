<?php include 'template.php'; ?>

<header class="py-2 sm:py-0 border-b border-gray-200 rounded-b-lg lg:rounded-b-full items-center justify-between fixed top-0 left-0 flex px-8 lg:px-24 w-screen bg-white z-10">
        <div class="items-center gap-2 md:flex">
            
            <!-- secondary menu -->
            <input type="checkbox" name="" id="menu-bar">
            <label class="opacity-50 hover:opacity-100 md:hidden" for="menu-bar"><img class="w-[1.8rem] cursor-pointer" src="img/menu.png" alt="Just another menu"></label>
            
            <nav id="menu" class="bg-white rounded-b-lg w-full h-[65vh] fixed top-0 left-0 hidden px-8">
                
                <input type="checkbox" name="" id="close-bar">
                <label class="opacity-50 hover:opacity-100 md:hidden" for="menu-bar"><img class="w-[1.8rem] cursor-pointer" src="img/menu.png" alt="Just another menu"></label>

                <ul class="py-4 flex flex-col items-center space-y-8">
                    <li class="decoration-yellow-400 rounded-lg w-full text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                        <a class="py-4" href="index.php">Home</a>
                    </li>
                    <li class="decoration-yellow-400 rounded-lg w-full text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                        <a class="py-4" href="Recipes.php">Recipes</a>
                    </li>
                    <li class="decoration-yellow-400 rounded-lg w-full text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                        <a class="py-4" href="about.php">About Us</a>
                    </li>
                    <li class="decoration-yellow-400 rounded-lg w-full text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                        <a class="py-4" href="form.php">Join Us</a>
                    </li>
                </ul>

            </nav>
            <!-- secondary menu -->

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

