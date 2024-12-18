<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Category</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="breakfast.css">
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
.breakfast{
    font-weight: bold;
    text-decoration: underline;
}

.navbar .hide a {
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
        <a href="{{ route('homepage') }}" style="text-decoration: none;"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>
    
        <div class="navbar">
            <a href="{{ route('recipe') }}">Recipe  | </a>
            <div class="breakfast"> 
                <a href="{{ route('breakfast') }}">Breakfast</a>
            </div>
            <div class="hide">
                <a href="{{ route('lunch') }}">Lunch</a>
                <a href="{{ route('dinner') }}">Dinner</a>
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
            <h2>Breakfast</h2>
            <div class="recipes-grid">
                <!-- Recipe Cards -->
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Champorado.jpg" alt="Champorado with Tuyo">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Champorado with Tuyo</p>
                        <p class="recipe-author">Recipe by: Chef Antonette</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Daing.jpg" alt="Daing">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Daing</p>
                        <p class="recipe-author">Recipe by: Chef Justin</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Fried_rice.jpg" alt="Fried Rice">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Fried Rice</p>
                        <p class="recipe-author">Recipe by: Chef Meshe</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Loaf_bread.jpg" alt="Mango Loaf Bread">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Mango Loaf Bread</p>
                        <p class="recipe-author">Recipe by: Chef Leah</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Longsilog.jpg" alt="Longsilog">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Longsilog</p>
                        <p class="recipe-author">Recipe by: Chef Bianca</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Omelette.jpg" alt="Omelette">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Omelette</p>
                        <p class="recipe-author">Recipe by: Chef Thea</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Pancake.jpg" alt="Pancake">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Pancake</p>
                        <p class="recipe-author">Recipe by: Chef Prince</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>

                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Sandwich.jpg" alt="Sandwich">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Sandwich</p>
                        <p class="recipe-author">Recipe by: Chef Jake</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.3</span>
                        </div>
                    </div>
                </div>
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Tocino.jpg" alt="Tocino">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Tocino</p>
                        <p class="recipe-author">Recipe by: Chef Kim</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="images/Waffles.jpg" alt="Waffles">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">Waffles</p>
                        <p class="recipe-author">Recipe by: Chef Bianca</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>4.9</span>
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
</html>
