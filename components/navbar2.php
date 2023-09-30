<?php include 'template.php'; ?>

<header class="py-2 sm:py-0 rounded-b-lg flex-row-reverse md:flex-row border-b border-gray-200 lg:rounded-b-full lg:pl-[7.4rem] lg:pr-[6.2rem] justify-between items-center fixed top-0 left-0 flex px-8 w-screen bg-white z-10">

    <a class="text-sm sm:text-2xl font-bold tracking-wider text-yellow-500 hover:text-yellow-400 transition-all py-4" href="index.php">The Filipino Cuisine</a>
    
    <!-- secondary menu -->
    <input type="checkbox" name="" id="menu-bar">
    <label class="opacity-50 hover:opacity-100 md:hidden" for="menu-bar"><img class="w-[1.8rem] cursor-pointer" src="img/cooking.png" alt="Just another menu"></label>
        
        <nav id="menu" class="bg-white border-b border-gray-200 rounded-b-lg w-full h-[100vh] fixed top-0 left-0 hidden">
                
            <input type="checkbox" name="" id="close-bar">
            <label class="opacity-50 hover:opacity-100 md:hidden" for="menu-bar"><img class="w-[1.8rem] cursor-pointer" src="img/pot.png" alt="Just another menu"></label>

            <ul class="py-4 flex flex-col items-center space-y-8">
                <li class="decoration-yellow-400 w-full rounded-lg text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                    <a class="py-4" href="adobo.php">Adobo</a>
                </li>
                <li class="decoration-yellow-400 w-full rounded-lg text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                    <a class="py-4" href="sisig.php">Sisig</a>
                </li>
                <li class="decoration-yellow-400 w-full rounded-lg text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                    <a class="py-4" href="dinuguan.php">Dinuguan</a>
                </li>
                <li class="decoration-yellow-400 w-full rounded-lg text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                    <a class="py-4" href="tinola.php">Tinola</a>
                </li>
                <li class="decoration-yellow-400 w-full rounded-lg text-center py-4 decoration-2 hover:text-gray-900 transition-all hover:bg-yellow-200">
                    <a class="py-4" href="sinigang.php">Sinigang</a>
                </li>
            </ul>

        </nav>
    <!-- secondary menu -->

    <div class="items-center gap-2 xl:gap-4 hidden md:flex">
        <nav class="font-bold">
            <ul class="xl:gap-4 flex gap-2 text-gray-800 lg:text-gray-500 underline-offset-8 transition-all">
                <li class="decoration-yellow-400 decoration-1 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="adobo.php">Adobo</a></li>
                <li class="decoration-yellow-400 decoration-1 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="sisig.php">Sisig</a></li>
                <li class="decoration-yellow-400 decoration-1 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="dinuguan.php">Dinuguan</a></li>
                <li class="decoration-yellow-400 decoration-1 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="tinola.php">Tinola</a></li>
                <li class="decoration-yellow-400 decoration-1 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="sinigang.php">Sinigang</a></li>
            </ul>
        </nav>
        <a href="recipes.php"><img class="md:block hidden w-8 opacity-50 cursor-pointer hover:opacity-100 py-4" src="img/search-button.png" alt="Just another search-button"></a>
    </div>   
</header>