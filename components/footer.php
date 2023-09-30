<footer class="lg:rounded-t-full rounded-t-lg space-y-12 lg:space-y-0 lg:pl-[8.4rem] lg:pr-[7.2rem] py-4 flex flex-col lg:flex-row items-center lg:items-baseline justify-between lg:justify-between w-screen bg-yellow-800 text-gray-200">
    <div class="mt-4 lg:mt-0 text-xs flex justify-center lg:justify-start w-1/4">
        <ul>
            <li class="leading-8"><a href="index.php">Home</a></li>
            <li><a href="recipes.php">Cook now</a>
                <ul class="pl-8">
                    <li><a href="adobo.php">Adobo</a></li>
                    <li><a href="sisig.php">Sisig</a></li>
                    <li><a href="dinuguan.php">Dinuguan</a></li>
                    <li><a href="tinola.php">Tinola</a></li>
                    <li><a href="sinigang.php">Sinigang</a></li>
                </ul>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="form.php">Sign in</a></li>
        </ul>
    </div>

    <div class="w-3/4 text-center text-xs">
        <h6 class="leading-8 font-bold">The Filipino Cuisine</h6>
        <p class="leading-4">A Task Performance for Fundamentals of Web Programming</p>
        <p class="leading-4">Submitted to Mr. Vincent Bryan F. Calija</p>
        <p class="leading-4">Submitted by Luis G. Suizo - BSCS</p>
        <br>
        <p>© Copyright <?php echo date("Y"); ?> Luis Suizo</p>

    </div>

    <div class="text-xs w-1/4 lg:flex flex-col items-end text-center lg:text-left lg:pr-4" id="contacts">
        <h6 class="leading-8 font-bold">Contact</h6>
        <p><a href="mailto:Lsuizo72@gmail.com">Lsuizo72@gmail.com</a></p>
        <p>+63 9566 401 574</p>
        <p>STI College Davao</p>
        <p><?php echo date("F j, Y"); ?></p>
        
        <div class="flex mt-4 space-x-2 text-center lg:text-left justify-center lg:justify-start">
            <a href="https://www.linkedin.com/in/luis-suizo-a37484258/"><img src="img/linkedin.png" alt="" width="20px"></a>
            <a href="https://twitter.com/lsuizo72"><img src="img/twitter.png" alt="" width="20px"></a>
            <a href="https://wa.me/+639566401574"><img src="img/whatsapp.png" alt="" width="20px"></a>
        </div>
    </div>
</footer>