<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

:root{
    --black: #1B1722;
    --white : #F0F0F0;
    --box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
*{
    font-family: 'Quicksand', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
html{
    font-size: 62.5%;   
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}
html::-webkit-scrollbar{
    width: .8rem;
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background-color: var(--white);
    border-radius: 5rem;
}

.header{
    top: 0;right: 0;left: 0;
    background-color: #000000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    padding: 1.4rem 7%;
    z-index: 999;
}
.header .logoContent{
    display: flex;
    align-items: center;
}
.header .logoContent .logo img{
    height: 4rem;
}
.header .logoContent .logoName {
    color: var(--white);
    font-size: 20px;
    font-weight: bolder;
}

.header .navbar a{
    font-size: 2rem;
    margin-right: 3rem;
    color: var(--white);
    font-weight: bold;
}
.header .navbar a:hover{
    border-bottom: .1rem solid var(--white);
    padding-bottom: .4rem;
}
.header .icon i{
    font-size: 20px;
    margin-left: 15px;
    color: var(--white);
    cursor: pointer;
}

.header .search{
    display: none;
    top: 100%;
    margin: 1.5rem 7%;
    background-color: white;
    width: 50%;
    right: 0;
    height: 5rem;
    position:  absolute;

}
.header .search input{
    width: 100%;
    height: 100%;
    font-size: 1.5rem;
    background-color: var(--white);
    color: var(--black);
    margin-right: 7%;
    border-radius: 1rem;
    padding: 0.5rem 1rem;
    box-shadow: var(--box-shadow);
}
.header .search.active{
    display: inline-block;
}
#menu-bar{
    display: none;
}


.home {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(images/images/logo.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
}
.home .homeContent{
    width: 50%;
    float: left;
    text-align: center;
    padding: 4rem;
}
.home .homeContent h2{
    font-size: 7rem;
    font-weight: bolder;
    margin-bottom: 2rem;
    line-height: 7rem;
    color: var(--black);
    text-shadow: var(--box-shadow);
}
.home .homeContent p{
    font-size: 1.8rem;
    line-height: 2;
    margin-bottom: 2rem;
}
.home .homeContent .home-btn{
    height: 3rem;
}
.home .homeContent .home-btn button{
    font-size: 1.8rem;
    background-color:#d2cb75;
    color: var(--black);
    border-radius: .7rem;
    padding: .7rem 2.4rem;
    cursor: pointer;
}
.home .homeContent .home-btn button:hover{
    font-size: 2rem;
    
}
section{
    padding: 2rem 7%;
}
.heading{
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
    color: var(--black);
}

.product .product-row{
    margin-bottom: 5rem;
    display: flex;
    align-items: center;
}
.product .product-row .box{
    display: flex;
    flex-direction: column;
    width: 50rem;
    background-color: var(--white);
    align-items: center;
    text-align: center;
    padding: 2rem;
    gap: 1.5rem;
    border-radius: 3rem;
    margin-right: 3rem;
}
.product .product-row .img img{
    height: 100%;
    width: 100%;
}
.product .product-row .img img:hover{
    transform: scale(1.1);
}
.product .product-row .content {
    margin-bottom: 4rem;
}
.product .product-row .product-content h3{
    font-size: 4rem;
    color: var(--black);
}
.product .product-row .product-content p{
    font-size: 1.5rem;
    line-height: 1.6;
    color: var(--black);
}
.product .product-row .product-content .orderNow{
    height: 3rem;
    margin-top: 2rem;
    margin-bottom: 3rem;
}
.product .product-row .product-content .orderNow button{
    font-size: 1.8rem;
    background-color: var(--black);
    color: var(--white);
    border-radius: .7rem;
    padding: .7rem 2rem;
    cursor: pointer;
}
.product .product-row .product-content .orderNow button:hover{
    font-size: 2rem;
}

.blogs{
    background: url(images/images/backGround.png) no-repeat;
    background-size: cover;
    background-position: center center;
}
.blogs  .blogs-row .box {
    display: flex;
    align-items: center;
    background-color: var(--white);
    flex-wrap: wrap;
}
.blogs .blogs-row .box .img{
    flex: 1 1 45rem;
}
.blogs .blogs-row .box .img img{
    width: 100%;
    padding: 5rem;
}
.blogs .blogs-row .box .content{
    flex: 1 1 45rem;
    padding: 2rem;
}
.blogs .blogs-row .box .content h3{
    font-size: 3.5rem;
    color: var(--black);
    text-shadow: var(--box-shadow);

}
.blogs .blogs-row .box .content p{
    font-size: 1.6rem;
    color: var(--black);
    padding: 1rem 0;
    line-height: 1.8;
    
}
.blogs .blogs-row .box .content a{
    font-size: 2rem;
    cursor: pointer;
}
.blogs .blogs-row .box .content a:hover{
    color: var(--black);
    text-shadow: var(--box-shadow);
}
 
.newsletter {
    background: url(images/images/bg.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5rem 2rem;
}

.newsletter form {
    max-width: 45rem;
    width: 100%;
    text-align: center;
    padding: 3rem 2rem;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 1rem;
    box-shadow: var(--box-shadow);
}

.newsletter form h3 {
    font-size: 2.5rem;
    color: var(--black);
    margin-bottom: 1.5rem;
    font-weight: bold;
}

.newsletter form .box {
    width: 100%;
    padding: 1rem 1.5rem;
    margin-bottom: 1.5rem;
    font-size: 1.6rem;
    border: 1px solid #ccc;
    border-radius: 0.5rem;
}

.newsletter form .box2 {
    width: 100%;
    padding: 1rem 0;
    font-size: 1.8rem;
    color: var(--white);
    background-color: var(--black);
    border-radius: 0.5rem;
    cursor: pointer;
    transition: 0.3s ease;
}

.newsletter form .box2:hover {
    background-color: var(--white);
    color: var(--black);
    border: 1px solid var(--black);
}

.review .review-row{
    display: flex;
    flex-direction: column ;
    align-items: center;
    
}
.review .review-row .box{
    width: 50%; 
    margin-bottom: 3rem;
    padding: 3rem;
    border-radius: 3rem;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
}

.review .review-row .box .client-review{
    margin-bottom: 3rem;
}
.review .review-row .box .client-review p{
    text-align: center;
    font-size: 2.5rem;
    line-height: 1.5;
}
.review .review-row .box .client-info{
    display: flex;
    align-items: center;
}
.review .review-row .box .client-info .img{
    padding-right: 3rem;
}
.review .review-row .box .client-info .img img{
    width: 7rem;
    height: 7rem;
    clip-path: circle(50% at 50% 50%);
}

.review .review-row .box .client-info .clientDetailed h3{
    font-size: 2.5rem;

}
.review .review-row .box .client-info .clientDetailed p{
    font-size: 1.5rem;
}

.footer {
    background: url(images/images/backGround.png) no-repeat;
    background-size: cover;
    background-position: center center;
}
.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 1.5rem;
    padding: 2rem 1rem;
}
.footer .box-container .mainBox .content{
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}
.footer .box-container .mainBox .content h1{
    font-size: 2rem;
    color: var(--black);
}
.footer .box-container .mainBox p{
    font-size: 1.7rem;
    line-height: 1.3;
    margin-bottom: 2rem;
}
.footer .box-container .box h3{
    font-size: 2.2rem;
    color: var(--black);
    padding: 1rem 0;
}
.footer .box-container .box a{
    display: block;
    font-size: 1.6rem;
    color: var(--black);
    padding: 1rem 0;
}
.footer .box-container .box a i{
    padding-right: .5rem;
    color: var(--black);
}
.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .share{
    padding: 1rem 0;
    text-align: center;
}
.footer .share a{
    height: 4rem;
    width: 4rem;
    line-height: 4rem;
    font-size: 2rem;
    color: var(--white);
    background: var(--black);
    margin: 0 .3rem;
    border-radius: 50%;

}
.footer .share a:hover{
    background: var(--white);
    color: var(--black);
}
.footer .credit{
    font-size: 2rem;
    margin-top: 2rem;
    padding-bottom: 2rem;
    color: var(--black);
    text-align: center;
    
}

.swiper-pagination-bullet{
    background-color: var(--black);
}
.swiper-button-next{
    color: var(--black);
}
.swiper-button-prev{
    color: var(--black);
}


/* media queries for web responsive */

@media (max-width:991px){
    html{
        font-size: 55%;
    }
    .header{
        padding: 1.3rem 3rem;
    }
    .home .homeContent{
        margin-left: 0;
        width: 80%;
    }
}

@media (max-width:768px) {
    #menu-bar{
        display: inline-block;
    }
    .header .navbar{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 25rem;
        background-color: var(--white);
        height: 80vh;
    }
    .header .navbar.active{
        right: 0;
    }
    .header .navbar a{
        display: block;
        font-size: 2rem;
        color: black;
        margin: 1.5rem;
    }

    .home .homeContent{
        margin-left: 0;
        width: 90%;
    }
}

@media (max-width:600px){
    html{
        font-size: 50%;
    }
}

/* Styles for dropdown menu */
.navbar {
    position: relative;
}

.dropdown {
    position: absolute;
    display: none;
    background-color:  #6e6e6d;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-top: 10px;
    border-radius: 5px;
    overflow: hidden;
}

.dropdown a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: black;
    white-space: nowrap;
}

.dropdown a:hover {
    background-color: #696967;
}

.navbar:hover .dropdown {
    display: block;
}

a{
    cursor: pointer;
}

    </style>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="<?php echo e(route('homepage')); ?>" style="text-decoration: none;"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 3rem; margin: 0;">4Bs</h1></a>
        </div>

        <nav class="navbar">
            <a href="<?php echo e(route('recipe')); ?>">Recipe</a>
            <div class="dropdown">
                <a href="<?php echo e(route('breakfast')); ?>">Breakfast</a>
                <a href="<?php echo e(route('lunch')); ?>">Lunch</a>
                <a href="<?php echo e(route('dinner')); ?>">Dinner</a>
            </div>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <a href="<?php echo e(route('favorites')); ?>"><i class="fas fa-heart" id="heart"></i></a>
            <i class="fas fa-bars" id="menu-bar"></i>
            <a href="<?php echo e(route('profile')); ?>"><i class="fas fa-user-circle" id="profile"></i></a>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Savor Every Bite, Share Every Thought</h2>
            <p>Discover delicious recipes and food stories that bring people together. 
                From classic dishes to new favorites, let’s enjoy every bite and share the joy of cooking!</p>
            <div class="home-btn">
                <a href="<?php echo e(route('recipe')); ?>"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Our Latest Recipe</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <?php
                $recipes = [
                    ["img" => "images/images/adobo.png", "title" => "Adobo", "desc" => "A classic Filipino dish of meat braised in soy sauce, vinegar, garlic, and spices."],
                    ["img" => "images/images/lumpiang-shanghai.png", "title" => "Lumpiang Shanghai", "desc" => "Crispy spring rolls filled with a savory mix of ground meat and vegetables."],
                    ["img" => "images/images/adobong pusit.png", "title" => "Adobong Pusit", "desc" => "Squid simmered in a tangy and savory adobo sauce with garlic and vinegar."],
                    ["img" => "images/images/fried chicken.png", "title" => "Fried Chicken", "desc" => "Golden, crispy chicken that’s tender and flavorful inside."]
                ];

                foreach ($recipes as $recipe) {
                    echo "<div class='swiper-slide box'>
                        <div class='img'>
                            <img src='{$recipe['img']}' alt=''>
                        </div>
                        <div class='product-content'>
                            <h3>{$recipe['title']}</h3>
                            <p>{$recipe['desc']}</p>
                            <div class='orderNow'>
                                <a href='" . route('recipe') . "'><button>See more</button></a>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">
        <div class="swiper blogs-row">
            <div class="swiper-wrapper">
                <?php
                $blogs = [
                    ["img" => "images/images/lechon-paksiw.jpg", "title" => "Lechon Paksiw", "content" => "Lechon Paksiw is a popular Filipino dish made by simmering leftover roasted pig in a flavorful sauce. The tangy and slightly sweet flavors of the dish come from the vinegar and lechon sauce combination."],
                    ["img" => "images/images/arroz caldo.jpg", "title" => "Arroz Caldo", "content" => "Arroz Caldo is a comforting Filipino rice porridge perfect for rainy days. It’s made by simmering rice in chicken broth with garlic, ginger, and fish sauce."],
                    ["img" => "images/images/pinakbet.jpg", "title" => "Pinakbet", "content" => "Pinakbet is a traditional Filipino vegetable dish made with a mix of local vegetables and shrimp paste for a salty and umami-rich flavor."]
                ];

                foreach ($blogs as $blog) {
                    echo "<div class='swiper-slide box'>
                        <div class='img'>
                            <img src='{$blog['img']}' alt=''>
                        </div>
                        <div class='content'>
                            <h3>{$blog['title']}</h3>
                            <p>{$blog['content']}</p>
                            <a href='" . route('recipe') . "'>See more</a>
                        </div>
                    </div>";
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->
    <section class="newsletter">
        <form action="" method="POST">
            <h3>Subscribe for latest updates</h3>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <input type="submit" value="Subscribe" class="box2">
        </form>
    </section>
    <!-- newsletter section ends here  -->

<!-- footer section start here  -->
<footer class="footer" id="contact">
    <div class="box-container">
        <div class="mainBox">
            <div class="content">
                <a href="#"><img src="images/images/.png" alt=""></a>
                <h1 class="logoName">4B's</h1>
            </div>
            <p>Discover delightful recipes with The 4B's—bringing the best of home-cooked flavors to your table.</p>
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="<?php echo e(route('recipe')); ?>"> <i class="fas fa-arrow-right"></i> Recipe</a>
            <a href="<?php echo e(route('favorites')); ?>"> <i class="fas fa-arrow-right"></i> Favorites</a>
        </div>
        <div class="box">
    <a href="<?php echo e(route('profile')); ?>"> <i class="fas fa-arrow-right"></i> Account info</a>
    <a href="<?php echo e(route('privacyPolicy')); ?>"> <i class="fas fa-arrow-right"></i> Privacy Policy</a>
    <a href="<?php echo e(route('userAgreement')); ?>"> <i class="fas fa-arrow-right"></i> User Agreement</a>
    <a href="<?php echo e(route('ourValues')); ?>"> <i class="fas fa-arrow-right"></i> Our Values</a>
    </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +639 1234 56789</a>
            <a href="#"> <i class="fas fa-envelope"></i> 4bspalate@gmail.com</a>
        </div>
    </div>
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>
    <div class="credit">
        Created by <span>4B's</span> | All rights reserved!
    </div>
</footer>


    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="index.js"></script>


    <script>
        // Toggle Navbar
        let navbar = document.querySelector('.navbar');
        document.querySelector('#menu-bar').onclick = () => {
            navbar.classList.toggle('active');
        };

        // Toggle Search
        let search = document.querySelector('.search');
        document.querySelector('#search').onclick = () => {
            search.classList.toggle('active');
        };

        // Product Swiper
        var swiper = new Swiper(".product-row", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Blog Swiper
        var swiper = new Swiper(".blogs-row", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });

        // Review Swiper
        var swiper = new Swiper(".review-row", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/homepage.blade.php ENDPATH**/ ?>