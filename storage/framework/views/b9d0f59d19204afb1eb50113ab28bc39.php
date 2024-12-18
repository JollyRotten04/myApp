<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Category</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="dinner.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}

body {
    background-color: #f9f9f9;
    color: #333;
}

/* Header Section */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #000000;
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logoContent {
    display: flex;
    align-items: center;
}

.logo img {
    height: 50px;
    margin-right: 10px;
}

.logoName {
    font-size: 24px;
    font-weight: bold;
    color: #d2cb75;
}

/* Navbar - Navigation Links */
.navbar {
    display: flex;
    align-items: center;
    flex-grow: 1; /* Ensures navbar takes up available space */
    justify-content: center; /* Centers the navigation links */
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

/* Icons Section */
.icon {
    display: flex;
    align-items: center;
}

.icon i {
    font-size: 20px;
    color: #fff;
    margin-left: 15px;
    cursor: pointer;
}

/* Main Content */
.favorites-section {
    padding: 30px;
}

.favorites-section h2 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
    color: #000000;
}

/* Recipe Grid */
.recipes-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    padding: 0 20px;
}

/* Recipe Card */
.recipe-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.recipe-card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.recipe-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.recipe-details {
    padding: 15px;
}

.recipe-name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.recipe-author {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
}

.rating {
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #ffcc00;
}

.rating span:first-child {
    margin-right: 5px;
}
.dinner {
    font-weight: bold;
    text-decoration: underline;
}

.recipe-section{
    font-weight: bold;
}

.navbar .light-color a {
    font-weight: lighter;
    color: #9b9595;
}

/* Responsive Design */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar {
        margin-top: 10px;
        justify-content: flex-start; 
    }

    .recipes-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}
</style>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
        <a href="<?php echo e(route('homepage')); ?>" style="text-decoration: none;"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>
    
        <div class="navbar">
            <div class="recipe-section">
                <a href="<?php echo e(route('recipe')); ?>">Recipe  | </a>
            </div>
            <div class="light-color">
                <a href="<?php echo e(route('breakfast')); ?>">Breakfast</a>
                <a href="<?php echo e(route('lunch')); ?>">Lunch</a>
            </div>            
            <div class="dinner">
                <a href="<?php echo e(route('dinner')); ?>">Dinner</a>
            </div>
        </div>
    </div>    
        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-heart" id="heart"></i>
            <i class="fas fa-user-circle" id="profile"></i>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="favorites-section">
            <h2>Dinner</h2>
            <div class="recipes-grid">
                <!-- Recipe Cards -->
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/adobong pusit.jpg" alt="Adobong Pusit">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Adobong Pusit</p>
                        <p class="recipe-author">Recipe by: Chef Antonette</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Chop Suey.jpg" alt="Chop Suey">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Chop Suey</p>
                        <p class="recipe-author">Recipe by: Chef Kaye</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.4</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/bicol-express.jpg" alt="Bicol Express">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Bicol Express</p>
                        <p class="recipe-author">Recipe by: Chef Mae</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/adobo.png" alt="Adobo">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Adobo</p>
                        <p class="recipe-author">Recipe by: Chef Seah</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.3</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/lechon kawali.jpg" alt="Lechon Kawali">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Lechon Kawali</p>
                        <p class="recipe-author">Recipe by: Chef Bianca</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/filipino beef steak.jpg" alt="Beef Steak">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Beef Steak</p>
                        <p class="recipe-author">Recipe by: Chef Thea</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Chicken Salad.jpg" alt="Salad">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Chicken Salad</p>
                        <p class="recipe-author">Recipe by: Chef Prince</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Afritada.jpg" alt="Afritada">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Afritada</p>
                        <p class="recipe-author">Recipe by: Chef Jake</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Garlic shrimp.jpg" alt="Garlic Shrimp">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Garlic Lime Shrimp</p>
                        <p class="recipe-author">Recipe by: Chef Kim</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/kare-kare.jpg" alt="Kare-Kare">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Kare-Kare</p>
                        <p class="recipe-author">Recipe by: Chef Bianca</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // JavaScript to toggle the visibility of the dropdown menu
        document.getElementById('recipe-link').addEventListener('click', function() {
            const dropdown = document.getElementById('category-dropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>
</html><?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/Dinner.blade.php ENDPATH**/ ?>