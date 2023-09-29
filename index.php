<!DOCTYPE html>
<html lang="en">
    <body class="bg-black">
        <?php include 'components/navbar.php'; ?>
        
        <main class="flex flex-col justify-center items-center h-screen m-0 w-screen mt-16 text-center" id="container">
            <h1 class="text-6xl lg:text-8xl tracking-wider text-gray-50" id="title">The Filipino Cuisine</h1">
            <p class="mb-24 text-base md:text-center lg:text-lg font-sans mt-4 mr-8 ml-8" id="subtitle">Unleash your inner chef with our deliciously diverse recipes!</p>
            <a class="text-sm font-bold tracking-wider bg-white text-gray-800 p-2 px-8 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="recipes.php" id="button">Cook now</a>
        </main>

        <?php include 'components/footer.php'; ?>
    </body>
</html>
