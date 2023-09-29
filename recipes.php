<!DOCTYPE html>
<html lang="en">

<body class="bg-black">
    <?php include 'components/navbar2.php'; ?>
    
    <main class="flex flex-col justify-center items-center h-screen m-0 w-screen mt-16 text-center" id="container1">
        <h1 class="text-6xl lg:text-8xl tracking-wider text-yellow-400" id="title">The Filipino Cuisine</h1">
        <p class="text-white text-base md:text-center lg:text-lg font-sans mt-4 mr-8 ml-8" id="subtitle">Unleash your inner chef with our deliciously diverse recipes!</p>
        <form id="button">
            <input class="pl-[1.5rem] text-sm lg:text-base font-sans p-2 text-black mt-16 w-3/4 bg-white ml-8 mr-8 rounded-full" placeholder="Anything in your mind" type="text">
        </form>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>