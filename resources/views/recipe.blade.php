<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4B's Recipe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/recipe.css') }}"> <!-- Assuming your CSS is in the public/css folder -->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');


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
        color: #fff;
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

    .header .navbar a{
        font-size: 1rem;
        margin-right: 3rem;
        color: var(--white);
        font-weight: bold;
        text-decoration: none;
    }

    .recipe-link-container {
        position: relative;
    }

    #category-dropdown {
        display: none;
        position: absolute;
        background-color: #fff;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 5px;
        top: 30px;
        left: 0;
        padding: 10px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    #category-dropdown a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
    }

    #category-dropdown a:hover {
        background-color: #f0f0f0;
    }


    .recipes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 100px 7% 20px;
    }

    .recipe-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        transition: transform 0.3s ease;
    }

    .recipe-card:hover {
        transform: scale(1.05);
    }

    .recipe-image {
        background-color: #ddd;
        height: 150px;
    }

    .recipe-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .recipe-details {
        padding: 15px;
    }

    .recipe-name {
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 5px;
    }

    .recipe-author {
        font-size: 14px;
        color: #666;
        margin: 0 0 10px;
    }

    .rating {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #f4b400;
    }

    .rating span:first-child {
        margin-right: 5px;
    }

    .favorite-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        color: #f43f5e;
        font-size: 20px;
        cursor: pointer;
    }

    .favorite-button.active {
        color: #ff0000;
    }

</style>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
        <a href="{{ route('homepage') }}" style="text-decoration: none;"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>

        <nav class="navbar">
            <div class="recipe-link-container">
                <a href="{{ route('recipe') }}" id="recipe-link">Recipe</a>
                <div class="dropdown" id="category-dropdown">
                    <a href="#">Breakfast</a>
                    <a href="#">Lunch</a>
                    <a href="#">Dinner</a>
                </div>
            </div>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-heart" id="heart"></i>
            <i class="fas fa-user-circle" id="profile"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="Search...">
        </div>
    </header>

    <!-- Recipe Grid Section Start -->
    <section class="recipes-grid">
        <?php
        // Array of recipes
        $recipes = [
            [
                "name" => "Chocolate Cake",
                "author" => "Chef John",
                "rating" => "⭐⭐⭐⭐⭐ (5.0)",
                "image" => "images/chocolate cake.jpg",
                "description" => "A rich and moist chocolate cake for dessert lovers."
            ],
            [
                "name" => "Pasta Carbonara",
                "author" => "Chef Jane",
                "rating" => "⭐⭐⭐⭐ (4.5)",
                "image" => "images/pasta carbonara.jpg",
                "description" => "A creamy pasta dish with bacon and parmesan."
            ],
            [
                "name" => "Chicken Alfredo",
                "author" => "Chef Mark",
                "rating" => "⭐⭐⭐⭐⭐ (5.0)",
                "image" => "images/chicken alfredo.jpg",
                "description" => "A classic Alfredo pasta with tender chicken slices."
            ],
            [
                "name" => "Vegetable Stir-Fry",
                "author" => "Chef Anna",
                "rating" => "⭐⭐⭐⭐ (4.7)",
                "image" => "images/vegetable-stir-fry.jpg",
                "description" => "A quick and healthy stir-fry with fresh veggies."
            ],
            [
                "name" => "Spaghetti Bolognese",
                "author" => "Chef Luigi",
                "rating" => "⭐⭐⭐⭐ (4.6)",
                "image" => "images/spaghetti bolegnese.jpg",
                "description" => "A hearty Italian pasta with meaty tomato sauce."
            ],
            [
                "name" => "Caesar Salad",
                "author" => "Chef Sophia",
                "rating" => "⭐⭐⭐⭐⭐ (5.0)",
                "image" => "images/caesar salad.jpg",
                "description" => "Crispy romaine lettuce with creamy Caesar dressing."
            ],
            [
                "name" => "Grilled Cheese Sandwich",
                "author" => "Chef Bob",
                "rating" => "⭐⭐⭐⭐ (4.2)",
                "image" => "images/grilled-cheese.jpg",
                "description" => "A gooey cheese sandwich grilled to perfection."
            ],
            [
                "name" => "Beef Tacos",
                "author" => "Chef Ricardo",
                "rating" => "⭐⭐⭐⭐ (4.8)",
                "image" => "images/beef tacos.jpg",
                "description" => "Soft tacos filled with seasoned beef and toppings."
            ],
            [
                "name" => "Vegetarian Pizza",
                "author" => "Chef Olivia",
                "rating" => "⭐⭐⭐⭐⭐ (5.0)",
                "image" => "images/vegetarian-pizza.jpg",
                "description" => "A flavorful pizza loaded with fresh veggies."
            ],
            [
                "name" => "Chicken Tikka Masala",
                "author" => "Chef Priya",
                "rating" => "⭐⭐⭐⭐⭐ (5.0)",
                "image" => "images/chicken masala.jpg",
                "description" => "Spicy and creamy chicken curry with Indian spices."
            ],
        ];

        // Loop through recipes and display them
        foreach ($recipes as $recipe) {
            echo "
            <div class='recipe-card' onclick='openRecipeModal(\"{$recipe['name']}\")'>
                <div class='recipe-image'>
                    <img src='{$recipe['image']}' alt='{$recipe['name']}'>
                </div>
                <div class='recipe-details'>
                    <h3 class='recipe-name'>{$recipe['name']}</h3>
                    <p class='recipe-author'>By {$recipe['author']}</p>
                    <div class='rating'>
                        <span>{$recipe['rating']}</span>
                    </div>
                </div>
                <button class='favorite-button' aria-label='Add to favorites'>❤️</button>
            </div>
            ";
        }
        ?>
    </section>

    <!-- Recipe Modal -->
    <div id="recipe-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeRecipeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <script>
        // JavaScript for opening and closing modal
        function openRecipeModal(recipeName) {
            const recipes = {
                "Chocolate Cake": "A rich and moist chocolate cake for dessert lovers.",
                "Pasta Carbonara": "A creamy pasta dish with bacon and parmesan.",
                "Chicken Alfredo": "A classic Alfredo pasta with tender chicken slices.",
                "Vegetable Stir-Fry": "A quick and healthy stir-fry with fresh veggies.",
                "Spaghetti Bolognese": "A hearty Italian pasta with meaty tomato sauce.",
                "Caesar Salad": "Crispy romaine lettuce with creamy Caesar dressing.",
                "Grilled Cheese Sandwich": "A gooey cheese sandwich grilled to perfection.",
                "Beef Tacos": "Soft tacos filled with seasoned beef and toppings.",
                "Vegetarian Pizza": "A flavorful pizza loaded with fresh veggies.",
                "Chicken Tikka Masala": "Spicy and creamy chicken curry with Indian spices.",
            };

            document.getElementById('modal-title').innerText = recipeName;
            document.getElementById('modal-description').innerText = recipes[recipeName] || 'No description available.';
            document.getElementById('recipe-modal').style.display = 'block';
        }

        function closeRecipeModal() {
            document.getElementById('recipe-modal').style.display = 'none';
        }
    </script>
</body>
</html>
