<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4B's Recipe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/recipe.css')); ?>">
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
            background-color: #000;
            color: #fff;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logoContent {
            display: flex;
            align-items: center;
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
            color: #000;
        }

        /* Recipe Grid */
.recipes-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 columns */
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
            position: relative;
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

        .favorite-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            color: #ccc;
            font-size: 20px;
            cursor: pointer;
        }

        .favorite-button.active {
            color: red;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar {
                margin-top: 10px;
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
            <a href="<?php echo e(route('homepage')); ?>" style="text-decoration: none;"> 
                <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1>
            </a>
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
    </header>

    <!-- Main Content Section -->
    <section class="favorites-section">
        <h2>Lunch</h2>
        <div class="recipes-grid" id="recipes-grid">
            <!-- Recipe Cards will be dynamically inserted here -->
        </div>
    </section>

    <script>
// Array of recipes with relevant data
const recipes = [
    { name: 'Adobo', image: 'images/adobo.png', author: 'Chef Antonette', rating: 4.7 },
    { name: 'Caldereta', image: 'images/Caldereta.jpg', author: 'Chef Kaye', rating: 4.4 },
    { name: 'Chicken Curry', image: 'images/chicken-curry.jpg', author: 'Chef Mae', rating: 4.8 },
    { name: 'Chop Suey', image: 'images/Chop Suey.jpg', author: 'Chef Seah', rating: 4.9 },
    { name: 'Escabeche', image: 'images/Escabeche.jpg', author: 'Chef Bianca', rating: 4.8 },
    { name: 'Kare-Kare', image: 'images/kare-kare.jpg', author: 'Chef Thea', rating: 4.5 },
    { name: 'Lumpiang Shanghai', image: 'images/lumpiang shanghai.jpg', author: 'Chef Prince', rating: 4.7 },
    { name: 'Pinakbet', image: 'images/pinakbet.jpg', author: 'Chef Jake', rating: 4.7 },
    { name: 'Sinigang', image: 'images/Sinigang.jpg', author: 'Chef Kim', rating: 4.9 },
    { name: 'Tinola', image: 'images/tinola.jpg', author: 'Chef Bianca', rating: 4.8 }
];


        // Function to create and display the recipe cards
        const displayRecipes = () => {
            const recipesGrid = document.getElementById('recipes-grid');
            recipes.forEach(recipe => {
                const recipeCard = document.createElement('div');
                recipeCard.classList.add('recipe-card');

                recipeCard.innerHTML = `
                    <div class="recipe-image">
                        <img src="${recipe.image}" alt="${recipe.name}">
                    </div>
                    <div class="recipe-details">
                        <p class="recipe-name">${recipe.name}</p>
                        <p class="recipe-author">Recipe by: ${recipe.author}</p>
                        <div class="rating">
                            <span>&#9733;</span>
                            <span>${recipe.rating}</span>
                        </div>
                    </div>
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                `;

                // Add functionality to the favorite button
                const favoriteButton = recipeCard.querySelector('.favorite-button');
                favoriteButton.addEventListener('click', () => {
                    favoriteButton.classList.toggle('active');
                    if (favoriteButton.classList.contains('active')) {
                        console.log(`"${recipe.name}" added to favorites.`);
                    } else {
                        console.log(`"${recipe.name}" removed from favorites.`);
                    }
                });

                recipesGrid.appendChild(recipeCard);
            });
        };

        // Call the function to display recipes
        displayRecipes();
    </script>
</body>
</html>
<?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/Lunch.blade.php ENDPATH**/ ?>