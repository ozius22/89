<?php include 'template.php'; ?>

<header class="border-b border-gray-200 lg:rounded-b-full lg:pl-[7.4rem] lg:pr-[6.2rem] justify-between fixed top-0 left-0 flex px-8 w-screen bg-white z-10">
    <a class="ml-[-0.5rem] text-xs w-16 sm:w-56 md:w-64 sm:text-2xl font-bold tracking-wider text-yellow-500 hover:text-yellow-400 transition-all py-4" href="index.php">The Filipino Cuisine</a>
    <div class="flex items-center gap-2 xl:gap-4 ">
        <nav class="text-xs sm:text-base lg:font-bold">
            <ul class="xl:gap-4 flex gap-2 text-gray-800 lg:text-gray-500 underline-offset-8 transition-all">
                <li class="decoration-yellow-400 decoration-1 sm:decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="adobo.php">Adobo</a></li>
                <li class="decoration-yellow-400 decoration-1 sm:decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="sisig.php">Sisig</a></li>
                <li class="decoration-yellow-400 decoration-1 sm:decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="dinuguan.php">Dinuguan</a></li>
                <li class="decoration-yellow-400 decoration-1 sm:decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="tinola.php">Tinola</a></li>
                <li class="decoration-yellow-400 decoration-1 sm:decoration-2 hover:text-gray-900 transition-all hover:underline py-4"><a class="py-4" href="sinigang.php">Sinigang</a></li>
            </ul>
        </nav>
        <a href="recipes.php"><img class="md:block hidden w-8 opacity-50 cursor-pointer hover:opacity-100 py-4" src="img/search-button.png" alt="Just another search-button"></a>
    </div>   
</header>