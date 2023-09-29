<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/template.php'; ?>

        <section class="lg:pr-[0rem] lg:pl-[6.5rem] lg:h-full xl:items-start lg:m-0 flex justify-center items-center" id="bg">
            <img class="rounded-lg hidden lg:block w-1/2 h-fit" src="img/home.jpg" alt="photo">
            <div class="xl:mt-24 justify-self-start lg:w-1/2 m-12 lg:m-16 mt-[-175px]">
                <div class="flex flex-col"> 
                    <a class="text-lg mb-12 sm:w-56 md:w-64 sm:text-2xl font-bold tracking-normal text-yellow-500 hover:text-yellow-400 transition-all py-4" href="index.php">The Filipino Cuisine</a> 
                    <h1 class="text-gray-800 text-2xl font-extrabold" id="texts">Sign in or create an account</h1>
                </div>
                <form class="lg:w-3/4 mt-12" id="texts">
                    <label class="text-sm block mb-2" for="name">Name</label>
                    <input class="w-full px-3 py-2 border border-gray-800 rounded-full" type="text" id="name"required>
                    <label class="text-sm block mb-2" for="email">Email adress</label>
                    <input class="w-full px-3 py-2 border border-gray-800 rounded-full" type="text" id="email"required>
                    <label class="text-sm block mb-2" for="question">Password</label>
                    <input class="w-full px-3 py-2 border border-gray-800 rounded-full" type="password" id="pass"required>
                    <button class="mt-4 bg-blue-white border border-yellow-400 font-bold text-gray-800 py-2 px-4 rounded-full hover:bg-yellow-400 hover:text-black hover:border-white transition-all" type="submit" id="texts">Submit</button>
                </form>
            </div>
            
        </section>
    </body>
</html>