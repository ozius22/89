<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/navbar2.php'; ?>

        <main class="lg:mt-20 xl:h-96 h-80 m-0 sm:mt-24 bg-white w-screen scroll-smooth">
            <div class="w-screen h-80 flex flex-col justify-center items-center">
                <h1 class="xl:font-bold lg:text-8xl text-center text-6xl text-gray-800 font-semibold tracking-wider mb-4">Adobo</h1>
                <p class="text-gray-800 xl:text-xl xl:font-medium text-justify text-sm md:text-base md:text-center mr-8 ml-8">"Adobo: The quintessential Filipino dish, boasting a delicious blend of tangy vinegar and savory soy sauce, sure to satisfy your taste buds and transport you to the heart of the Philippines!"</p> <br>
                <div class="text-sm lg:text-base hidden xl:gap-4 sm:flex gap-2 mt-4 md:mt-8 transition-all">
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#ingredients">Ingredients</a>
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#procedures">Procedures</a>
                </div>
            </div>
        </main>

        <figure class="w-screen mx-auto">
            <img src="img/adobo.jpg" alt="adobo">
            <figcaption class="italic xl:p-8 xl:text-lg text-justify md:text-base sm:text-center mx-auto text-gray-500 text-sm w-3/4 p-4" id="ingredients">Adobo is a popular Filipino dish that is considered by many to be the country's national dish. It is a savory and tangy dish made with meat, seafood, or vegetables that are marinated and cooked in a mixture of vinegar, soy sauce, garlic, and other spices.</figcaption>
        </figure>

        <div class="w-full">
            <div class="mx-auto w-[45%] border-t border-gray-300 mt-[2rem] mb-[3.5rem]"></div>
        </div>

        <section class="xl:mb-16 xl:h-96 lg:flex lg:mt-4">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Ingredients</h2>
                <ul class="text-sm xl:text-lg sm:text-base pt-4 pb-4 text-justify">
                <li>1 1/2 to 2 pounds of chicken, pork, or a combination of both</li>
                <li>1/2 cup soy sauce</li>
                <li>1/2 cup vinegar (cane or rice vinegar are commonly used)</li>
                <li>1 head of garlic, peeled and crushed</li>
                <li>1 teaspoon whole peppercorns</li>
                <li>3 bay leaves</li>
                <li>1/2 cup water</li>
                <li>1 tablespoon cooking oil (optional)</li>
                </ul>
                <p class="text-sm sm:text-base text-justify sm:text-left" id="procedures" >Some variations of Adobo also include additional ingredients such as sugar, coconut milk, potatoes, or other vegetables. But this is the basic recipe that many Filipinos use for their Adobo dish.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/adoboI.jpg" alt="adobo">
     </section>

     <section class="xl:mb-[14rem] xl:h-96 lg:flex">
        <div class="m-8 lg:w-2/4 xl:h-96">
            <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Cooking Procedures</h2>
            <ol class="ml-4 text-sm xl:text-base sm:text-base pt-4 pb-4 list-decimal sm:text-justify">
            <li>In a large pot or wok, heat the cooking oil over medium heat (optional).</li>
            <li>Add the crushed garlic and sauté until fragrant.</li>
            <li>Add the chicken pieces and cook until lightly browned.</li>
            <li>Pour in the soy sauce, vinegar, and water. Add the whole peppercorns and bay leaves.</li>
            <li>Bring the mixture to a boil then reduce heat to low.</li>
            <li>Cover the pot and let the Adobo simmer for about 30-45 minutes or until the chicken is cooked through and tender.</li>
            <li>Once the chicken is cooked, remove the lid and continue cooking for another 10-15 minutes or until the sauce has thickened to your desired consistency.</li>
            <li>Remove from heat and serve hot with rice.</li>
            </ol>
            <p class="text-sm sm:text-base text-justify sm:text-left">Some variations of Adobo also include additional ingredients such as sugar, coconut milk, potatoes, or other vegetables. But this is the basic recipe that many Filipinos use for their Adobo dish.</p>
        </div>
        <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/cooking.jpg" alt="adobo">
        </section>

        <?php include 'components/footer.php'; ?>
    </body>
</html>