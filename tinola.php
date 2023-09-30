<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/navbar2.php'; ?>

        <main class="mt-[3rem] lg:mt-20 xl:h-96 h-80 m-0 sm:mt-24 bg-white w-screen scroll-smooth">
            <div class="w-screen h-80 flex flex-col justify-center items-center">
            <h1 class="xl:font-bold lg:text-8xl text-center text-6xl text-gray-800 font-semibold tracking-wider mb-4">Tinola</h1>
            <p class="text-gray-800 xl:text-xl xl:font-medium text-justify text-sm md:text-base md:text-center mr-8 ml-8">"Experience the heartwarming flavors of our comforting tinola recipe, a Filipino classic that's sure to soothe your soul!"</p> <br>
                <div class="text-sm lg:text-base hidden xl:gap-4 sm:flex gap-2 mt-4 md:mt-8 transition-all">
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#ingredients">Ingredients</a>
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#procedures">Procedures</a>
                </div>
            </div>
        </main>

        <figure class="w-screen mx-auto">
            <img class="w-screen" src="img/tinola.jpg" alt="tinola">
        <figcaption class="italic xl:p-8 xl:text-lg text-justify md:text-base sm:text-center mx-auto text-gray-500 text-sm w-3/4 p-4" id="ingredients">Tinola is a traditional Filipino soup dish made with chicken, papaya, ginger, and other aromatics. It is a beloved comfort food that is often served as a main course, especially during cold and rainy days. The soup is known for its light and refreshing flavor, with the ginger and papaya adding a subtle sweetness to the broth. Tinola is usually served with steamed rice and is enjoyed by many Filipinos as a simple and nourishing meal that can be easily prepared at home.</figcaption>
        </figure>

        <div class="w-full">
            <div class="mx-auto w-[45%] border-t border-gray-300 mt-[2rem] mb-[3.5rem]"></div>
        </div>

        <section class="xl:mb-16 xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Ingredients</h2>
                <ul class="text-sm xl:text-lg sm:text-base pt-4 pb-4 text-justify">
                <li>1 whole chicken, cut into serving pieces</li>
                <li>1 tablespoon cooking oil</li>
                <li>1 onion, sliced</li>
                <li>3 cloves garlic, minced</li>
                <li>1 thumb-sized ginger, sliced</li>
                <li>1 medium-sized green papaya, peeled, seeded, and cut into wedges</li>
                <li>4-6 cups water or chicken broth</li>
                <li>2-3 pieces chili leaves or malunggay leaves (optional)</li>
                <li>Fish sauce and ground black pepper to taste</li>
                </ul>
                <p class="text-sm sm:text-base text-justify sm:text-left" id="procedures" >Note that some variations of tinola may also include additional ingredients, such as green chili peppers, chayote, or sayote leaves.</p>
            </div>
      <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/tinolaI.jpg" alt="tinola">
        </section>

        <section class="xl:mb-32 xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Cooking Procedures</h2>
                <ol class="ml-4 text-sm xl:text-base sm:text-base pt-4 pb-4 list-decimal sm:text-justify">
                <li>In a pot over medium heat, sauté the onion, garlic, and ginger until fragrant.</li>
                <li>Add the chicken pieces to the pot and cook until lightly browned, about 5-10 minutes.</li>
                <li>Pour in enough water or chicken broth to cover the chicken. Bring the mixture to a boil, then reduce the heat to low and let it simmer for about 30 minutes or until the chicken is almost cooked.
                </li>
                <li>Add the papaya wedges to the pot and continue to cook for another 10-15 minutes or until the papaya is tender.</li>
                <li>Add the chili leaves or malunggay leaves to the pot, if using. Season with fish sauce and ground black pepper to taste.</li>
                <li>Serve hot with steamed rice.</li>
                </ol>
                <p class="text-sm sm:text-base text-justify sm:text-left">Enjoy your warm and comforting tinola!</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/cooking.jpg" alt="tinola">
        </section>

        <?php include 'components/footer.php'; ?>
    </body>
</html>