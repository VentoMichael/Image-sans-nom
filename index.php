<?php
    $title = "Home";
    $first_menu = "nav-active";
    $second_menu = "nav-not_active";
    $third_menu = "nav-not_active";
    $active = "nav-active";
    require("header.php");
?>

<section class="home__container__img">
    <h2 class="hidden">Book & exposition</h2>
    <a href="#" class="home__link">
        <div class="container__img__books">
            <img src="./ressources/img/book/book1.jpg" alt="" class="img__book">
            <img src="./ressources/img/book/book2.jpg" alt="" class="img__book">
            <img src="./ressources/img/book/book3.jpg" alt="" class="img__book">
        </div>
        <div class="container__img__expositions">
            <img src="./ressources/img/expo/affiches_001.jpg" alt="" class="img__expositions">
            <img src="./ressources/img/expo/affiches_002.jpg" alt="" class="img__expositions">
        </div>
    </a>
</section>











    <section class="container__book__month">
        <?php include ('ressources/svg/mouse.svg')?>
        <h2 class="title__book__month">See our book of the month</h2>
            <div class="container__slideText">
                <section class="container__titletext__book" id="container__titletext__book">
                    <h3 class="title__book">
                        lorem ipsum
                    </h3>
                    <p class="text__book">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A corporis delectus dolorem excepturi natus nostrum quisquam quod. Deleniti dicta ducimus, expedita facilis iure iusto, libero molestias possimus provident quos vitae?
                    </p>
                </section>
                <div class="container__slide" id="container__slide">
                    <div class="next-prev_button">
                        <button class="button_slide left-button" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="button_slide right-button" onclick="plusDivs(1)">&#10095;</button>
                        <div class="mySlides">
                            <img src="./ressources/img/book/book1.jpg" alt="">
                        </div>
                        <div class="mySlides">
                            <img src="./ressources/img/book/book2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>





<?php
    require ("footer.php");
?>