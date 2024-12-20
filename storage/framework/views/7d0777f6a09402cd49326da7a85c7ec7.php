<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4B's Recipe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
</head>
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
    font-size: 2rem;
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
    font-size: 2rem;
    margin-right: 2rem;
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

        /* Navbar - Navigation Links */
        .navbar {
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            position: relative;
            font-weight: bolder;
        }

        .navbar a:hover {
            text-decoration: underline;
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

/* Profile Section */
.profile-container {
    display: flex;
    padding: 10rem 7%;
    gap: 4rem;
    background-color: var(--black);
    min-height: 100vh;
    color: var(--white);
}

.profile-info {
    flex: 1;
    max-width: 300px;
    text-align: left;
}

.profile-pic {
    width: 100px;
    height: 100px;
    background-color: var(--white);
    border-radius: 50%;
    margin-bottom: 1.5rem;
}

.profile-info h2 {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
    color: #d2cb75;
}

.user-details li {
    list-style: none;
    font-size: 1.4rem;
    margin-bottom: 0.5rem;
}

/* Recipe Grid Section */
.recipe-grid {
    flex: 2;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    text-align: center;
    position: relative;
}

.recipe-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.recipe-box {
    width: 100%;
    height: 120px;
    background-color: #f7ead1;
    border-radius: 8px;
    box-shadow: var(--box-shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    cursor: pointer;
}

.recipe-box:hover {
    transform: translateY(-10px);
    box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.3);
}

.recipe-box.add-recipe i {
    font-size: 3rem;
    color: #000;
    margin-top: 3rem;
}

.recipe-name {
    margin-top: 0.8rem;
    font-size: 1.4rem;
    font-weight: bold;
    color: var(--white);
}

.profile-pic {
    width: 100px;
    height: 100px;
    background-color: var(--white); 
    border-radius: 50%;
    margin-bottom: 1.5rem;
    overflow: hidden; 
}

.profile-pic img {
    width: 100%;
    height: 100%;
    object-fit: cover; 
}


.recipe-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    cursor: pointer;
}


@media (max-width: 768px) {
    .profile-container {
        flex-direction: column;
        align-items: center;
    }

    .recipe-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .recipe-grid {
        grid-template-columns: 1fr;
    }
}

</style>
<body>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
            <a href="<?php echo e(route('homepage')); ?>" style="text-decoration: none;"><h1 class="logoName">4B's</h1></a>
        </div>

        <div class="navbar">
            <a href="<?php echo e(route('recipe')); ?>">Recipe  | </a>
            <div class="breakfast"> 
                <a href="<?php echo e(route('breakfast')); ?>">Breakfast</a>
            </div>
            <div class="hide">
                <a href="<?php echo e(route('lunch')); ?>">Lunch</a>
                <a href="<?php echo e(route('dinner')); ?>">Dinner</a>
            </div>
        </div>

        <div class="icon">
            <a href="<?php echo e(route('favorites')); ?>"><i class="fas fa-heart" id="heart"></i></a>
            <a href="<?php echo e(route('profile')); ?>"><i class="fas fa-user-circle" id="profile"></i></a>
        </div>

        <div class="search">
            <input type="search" placeholder="Search...">
        </div>
    </header>

    <!-- Profile Section -->
    <section class="profile-container">
        <!-- User Info Section -->
        <div class="profile-info">
            <div class="profile-pic">
                <!-- Add your profile image here -->
                <img src="images/profile.jpg" alt="Profile Picture" class="profile-img">
            </div>
            <h2>4B's PALATE</h2>
            <ul class="user-details">
                <li><strong>Name:</strong> Palate</li>
                <li><strong>Birthdate:</strong> 12/17/2024</li>
                <li><strong>Email:</strong> 4b'spalate@email.com</li>
                <li><strong>Bio:</strong> Just a student trying to figure things out 🤔</li>
            </ul>
        </div>

        <!-- Recipe Grid Section -->
        <div class="recipe-grid">
            <!-- Add Recipe Card (No Image) -->
            <div class="recipe-wrapper">
                <div class="recipe-box add-recipe">
                    <i class="fas fa-plus"></i>
                </div>
                <p class="recipe-name">Add Recipe</p>
            </div>
            
            <!-- Recipe Cards with Images -->
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Crispy Avocado Tacos.jpg" alt="Crispy Avocado Tacos" class="recipe-img">
                </div>
                <p class="recipe-name">Crispy Avocado Tacos</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Grilled Chicken Caesar Delight.jpg" alt="Grilled Chicken Caesar Delight" class="recipe-img">
                </div>
                <p class="recipe-name">Grilled Chicken Caesar Delight</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Spicy Tuna Tartare.jpg" alt="Spicy Tuna Tartare" class="recipe-img">
                </div>
                <p class="recipe-name">Spicy Tuna Tartare</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Calamares.jpg" alt="Calamares" class="recipe-img">
                </div>
                <p class="recipe-name">Calamares (Fried Squid Rings)</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Tinolang Manok.jpg" alt="Tinolang Manok" class="recipe-img">
                </div>
                <p class="recipe-name">Tinolang Manok (Chicken Ginger Soup)</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Kwek-Kwek.jpg" alt="Kwek-Kwek" class="recipe-img">
                </div>
                <p class="recipe-name">Kwek-Kwek (Quail Eggs in Batter)</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/sisig.jpg" alt="Sisig" class="recipe-img">
                </div>
                <p class="recipe-name">Sisig (Tofu with Soy Sauce and Chili)</p>
            </div>
            <div class="recipe-wrapper">
                <div class="recipe-box">
                    <img src="images/Chopsuey.jpg" alt="Chopsuey" class="recipe-img">
                </div>
                <p class="recipe-name">Chopsuey (Stir-fried Vegetables with Meat)</p>
            </div>
        </div>
    </section>

    <!-- Swiper and Custom JS Links -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo e(asset('js/prof.js')); ?>"></script>

    <!-- Inline JS Script -->
    <script>
        let navbar = document.querySelector('.navbar');
        document.querySelector('#menu-bar').onclick = () => {
            navbar.classList.toggle('active');
        };

        let search = document.querySelector('.search');
        document.querySelector('#search').onclick = () => {
            search.classList.toggle('active');
        };

        var swiperProduct = new Swiper(".product-row", {
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

        var swiperBlogs = new Swiper(".blogs-row", {
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

        var swiperReview = new Swiper(".review-row", {
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
<?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/profile.blade.php ENDPATH**/ ?>