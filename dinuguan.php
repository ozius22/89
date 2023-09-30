<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/navbar2.php'; ?>

        <main class="mt-[3rem] lg:mt-20 xl:h-96 h-80 m-0 sm:mt-24 bg-white w-screen scroll-smooth">
            <div class="w-screen h-80 flex flex-col justify-center items-center">
            <h1 class="xl:font-bold lg:text-8xl text-center text-6xl text-gray-800 font-semibold tracking-wider mb-4">Dinuguan</h1>
        <p class="text-gray-800 xl:text-xl xl:font-medium text-justify text-sm md:text-base md:text-center mr-8 ml-8">"Indulge in the rich and bold flavors of our traditional dinuguan recipe, a Filipino classic that's sure to satisfy your cravings!"</p> <br>
                <div class="text-sm lg:text-base hidden xl:gap-4 sm:flex gap-2 mt-4 md:mt-8 transition-all">
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#ingredients">Ingredients</a>
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#procedures">Procedures</a>
                </div>
            </div>
        </main>

        <figure class="w-screen mx-auto">
            <img class="w-screen" src="img/dinuguan.jpg" alt="dinuguan">
            <figcaption class="italic xl:p-8 xl:text-lg text-justify md:text-base sm:text-center mx-auto text-gray-500 text-sm w-3/4 p-4" id="ingredients">Dinuguan, also known as "chocolate meat," is a popular Filipino dish made with pork meat and/or innards cooked in a thick, savory sauce of pig's blood, vinegar, and spices. The dish is often served as a main course and is typically paired with white rice or a side of puto (rice cake). The deep, earthy flavors of the pig's blood are balanced by the tangy and pungent taste of the vinegar, making for a uniquely rich and bold flavor profile. Despite its unusual name and appearance, dinuguan is a beloved comfort food in the Philippines and is enjoyed by many Filipinos both at home and abroad.</figcaption>
        </figure>

        <div class="w-full">
            <div class="mx-auto w-[45%] border-t border-gray-300 mt-[2rem] mb-[3.5rem]"></div>
        </div>

        <section class="xl:mb-16 xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Ingredients</h2>
                <ul class="text-sm xl:text-lg sm:text-base pt-4 pb-4 text-justify">
                <li>1 pound pork meat or innards (such as liver, heart, or kidneys), diced</li>
                <li>1 cup pork blood</li>
                <li>1 onion, chopped</li>
                <li>3 cloves garlic, minced</li>
                <li>2-3 red or green chili peppers, sliced (optional)</li>
                <li>1/2 cup vinegar</li>
                <li>1/4 cup soy sauce</li>
                <li>2 cups water or pork broth</li>
                <li>2 tablespoons cooking oil</li>
                <li>Salt and pepper to taste</li>
                </ul>
                <p class="text-sm sm:text-base text-justify sm:text-left" id="procedures" >Note that some recipes may call for additional ingredients, such as ginger, bay leaves, or sugar.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/dinuguanI.jpg" alt="dinuguan">
        </section>

        <section class="xl:mb-[14rem] xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Cooking Procedures</h2>
                <ol class="ml-4 text-sm xl:text-base sm:text-base pt-4 pb-4 list-decimal sm:text-justify">
                <li>In a pot over medium heat, sauté the onions until translucent. Add the garlic and chili peppers, and sauté for another 1-2 minutes until fragrant.</li>
                <li>Add the diced pork meat or innards, and cook until lightly browned, about 10-15 minutes.</li>
                <li>Pour in the vinegar, soy sauce, and water or pork broth, and stir to combine. Bring the mixture to a boil, then reduce the heat to low and let it simmer for 30-45 minutes or until the meat is tender.
                </li>
                <li>Add the pork blood to the pot, stirring constantly to prevent lumps from forming. Continue to cook for another 10-15 minutes, or until the sauce has thickened to your desired consistency.</li>
                <li>Season with salt and pepper to taste.</li>
                <li>Serve hot with white rice or a side of puto (rice cake).</li>
                </ol>
                <p class="text-sm sm:text-base text-justify sm:text-left">Some variations of Adobo also include additional ingredients such as sugar, coconut milk, potatoes, or other vegetables. But this is the basic recipe that many Filipinos use for their Adobo dish.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/cooking.jpg" alt="dinuguan">
        </section>

        <?php include 'components/footer.php'; ?>
    </body>
</html>