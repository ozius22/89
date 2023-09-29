<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/navbar2.php'; ?>

        <main class="lg:mt-20 xl:h-96 h-80 m-0 sm:mt-24 bg-white w-screen scroll-smooth">
            <div class="w-screen h-80 flex flex-col justify-center items-center">
            <h1 class="xl:font-bold lg:text-8xl text-center text-6xl text-gray-800 font-semibold tracking-wider mb-4">Sinigang</h1>
            <p class="text-gray-800 xl:text-xl xl:font-medium text-justify text-sm md:text-base md:text-center mr-8 ml-8">"Get ready for a burst of tangy and savory flavors with our sinigang recipe, a Filipino classic that's sure to satisfy your taste buds!"</p> <br>
                <div class="text-sm lg:text-base hidden xl:gap-4 sm:flex gap-2 mt-4 md:mt-8 transition-all">
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#ingredients">Ingredients</a>
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#procedures">Procedures</a>
                </div>
            </div>
        </main>

        <figure class="w-screen mx-auto">
            <img src="img/sinigang.jpg" alt="sinigang">
            <figcaption class="italic xl:p-8 xl:text-lg text-justify md:text-base sm:text-center mx-auto text-gray-500 text-sm w-3/4 p-4" id="ingredients">Sinigang is a popular Filipino soup dish known for its signature sour and savory flavor. It is traditionally made with tamarind or other souring agents such as kamias or guava. The soup is usually cooked with pork, beef, shrimp, or fish, along with various vegetables such as kangkong (water spinach), radish, okra, and eggplant. The combination of sourness, saltiness, and umami flavors in sinigang creates a unique and comforting taste that many Filipinos crave. Sinigang is often served with steamed rice and enjoyed as a main course, especially during colder months.</figcaption>
        </figure>

        <div class="w-full">
            <div class="mx-auto w-[45%] border-t border-gray-300 mt-[2rem] mb-[3.5rem]"></div>
        </div>

        <section class="xl:mb-32 xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Ingredients</h2>
                <ul class="text-sm xl:text-lg sm:text-base pt-4 pb-4 text-justify">
                <li>1 lb pork belly or pork ribs, cut into serving pieces</li>
                <li>1 onion, chopped</li>
                <li>3 cloves garlic, minced</li>
                <li>1 thumb-sized ginger, sliced</li>
                <li>1 medium-sized tomato, chopped</li>
                <li>1 pack (about 1.5 oz) sinigang mix</li>
                <li>4 cups water</li>
                <li>2 cups kangkong (water spinach), cut into 2-inch pieces</li>
                <li>1 medium-sized radish, sliced</li>
                <li>4-5 pieces okra, sliced diagonally</li>
                <li>2 pieces green chili peppers (optional)</li>
                <li>Fish sauce and ground black pepper to taste</li>
                </ul>
                <p class="text-sm sm:text-base text-justify sm:text-left" id="procedures" >Note that some variations of tinola may also include additional ingredients, such as green chili peppers, chayote, or sayote leaves.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/sinigangI.jpg" alt="sinigang">
        </section>

        <section class="xl:mb-[14rem] xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Cooking Procedures</h2>
                <ol class="ml-4 text-sm xl:text-base sm:text-base pt-4 pb-4 list-decimal sm:text-justify">
                <li>In a pot over medium heat, sauté the onion, garlic, and ginger until fragrant.</li>
                <li>Add the pork pieces to the pot and cook until lightly browned, about 5-10 minutes.</li>
                <li>Add the tomato to the pot and cook until softened, about 2-3 minutes.
                </li>
                <li>Pour in the water and bring the mixture to a boil. Add the sinigang mix and stir well to dissolve.</li>
                <li>Add the radish to the pot and continue to cook until tender, about 10-15 minutes.</li>
                <li>Add the okra and kangkong to the pot and cook until the vegetables are tender, about 3-5 minutes.</li>
                <li>Add the green chili peppers, if using. Season with fish sauce and ground black pepper to taste.</li>
                <li>Serve hot with steamed rice.</li>
                </ol>
                <p class="text-sm sm:text-base text-justify sm:text-left">Enjoy your delicious and comforting pork sinigang!</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/cooking.jpg" alt="tinola">
        </section>

        <?php include 'components/footer.php'; ?>
    </body>
</html>