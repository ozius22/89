<!DOCTYPE html>
<html>
    <body>
        <?php include 'components/navbar2.php'; ?>

        <main class="lg:mt-20 xl:h-96 h-80 m-0 sm:mt-24 bg-white w-screen scroll-smooth">
            <div class="w-screen h-80 flex flex-col justify-center items-center">
            <h1 class="xl:font-bold lg:text-8xl text-center text-6xl text-gray-800 font-semibold tracking-wider mb-4">Sisig</h1>
            <p class="text-gray-800 xl:text-xl xl:font-medium text-justify text-sm md:text-base md:text-center mr-8 ml-8">"Get sizzling with our signature sisig recipe, packed with bold flavors and irresistible crunch!"</p> <br>
                <div class="text-sm lg:text-base hidden xl:gap-4 sm:flex gap-2 mt-4 md:mt-8 transition-all">
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#ingredients">Ingredients</a>
                <a class="bg-white border-[.5px] border-gray-500 text-gray-500 p-2 rounded-full hover:bg-yellow-400 hover:text-black hover:border-transparent" href="#procedures">Procedures</a>
                </div>
            </div>
        </main>

        <figure class="w-screen mx-auto">
            <img src="img/sisig.jpg" alt="sisig">
            <figcaption class="italic xl:p-8 xl:text-lg text-justify md:text-base sm:text-center mx-auto text-gray-500 text-sm w-3/4 p-4" id="ingredients">Sisig is a popular Filipino dish made with sizzling chopped meat (usually pork), seasoned with a blend of savory and tangy flavors, and served on a hot plate. Traditionally served as a beer snack, this dish has become a staple in Filipino cuisine and is enjoyed as a main course as well. The crispy texture of the meat mixed with the bold and tangy flavors of vinegar, soy sauce, and chili peppers make it an irresistible and satisfying dish that's perfect for any occasion.</figcaption>
        </figure>

        <div class="w-full">
            <div class="mx-auto w-[45%] border-t border-gray-300 mt-[2rem] mb-[3.5rem]"></div>
        </div>

        <section class="xl:mb-32 xl:h-96 lg:flex ">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Ingredients</h2>
                <ul class="text-sm xl:text-lg sm:text-base pt-4 pb-4 text-justify">
                <li>1 pound of pork belly or shoulder, boiled and chopped into small pieces</li>
                <li>1/2 cup of chicken liver, boiled and chopped into small pieces</li>
                <li>1 medium onion, chopped</li>
                <li>3 cloves of garlic, minced</li>
                <li>2 red or green chili peppers, chopped</li>
                <li>1/4 cup of vinegar</li>
                <li>1/4 cup of soy sauce</li>
                <li>1/4 cup of calamansi juice (or lime or lemon juice)</li>
                <li>2 tablespoons of cooking oil</li>
                <li>Salt and pepper to taste</li>
                <li>Optional: mayonnaise, chicharron (pork cracklings), green onions, and/or egg</li>
                </ul>
                <p class="text-sm sm:text-base text-justify sm:text-left" id="procedures" >Note that some recipes may call for additional ingredients, such as ginger, bay leaves, or even chopped pig's ears or snouts.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/sisigI.jpg" alt="sisig">
        </section>

        <section class="xl:mb-[14rem] xl:h-96 lg:flex">
            <div class="m-8 lg:w-2/4 xl:h-96">
                <h2 class="text-yellow-600 text-3xl font-bold tracking-wider" id="title">Cooking Procedures</h2>
                <ol class="ml-4 text-sm xl:text-base sm:text-base pt-4 pb-4 list-decimal sm:text-justify">
                <li>In a pan over medium heat, add cooking oil and sauté the onions until translucent.</li>
                <li>Add the garlic and chili peppers, and sauté for another 1-2 minutes until fragrant.</li>
                <li>Add the boiled pork belly and chicken liver, and cook until slightly browned and crispy, about 10-15 minutes.</li>
                <li>Pour in the vinegar, soy sauce, and calamansi juice, and stir to coat the meat evenly. Let the mixture cook for another 2-3 minutes.</li>
                <li>Season with salt and pepper to taste.</li>
                <li>Optional: Add some mayonnaise to the mixture for added creaminess, and top with some crushed chicharron and chopped green onions.</li>
                <li>Optional: Serve with a sunny-side up egg on top for a delicious and filling breakfast or brunch dish.</li>
                </ol>
                <p class="text-sm sm:text-base text-justify sm:text-left">Some variations of Adobo also include additional ingredients such as sugar, coconut milk, potatoes, or other vegetables. But this is the basic recipe that many Filipinos use for their Adobo dish.</p>
            </div>
            <img class="hidden lg:flex w-1/2 m-8 lg:mr-8 h-96 object-cover" src="img/cooking.jpg" alt="sisig">
        </section>

        <?php include 'components/footer.php'; ?>
    </body>
</html>