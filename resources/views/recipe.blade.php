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
    /* Your existing CSS code here... */
</style>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
            <a href="{{ route('homepage') }}" style="text-decoration: none;"> 
                <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1>
            </a>
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
            <a href="{{ route('favorites') }}"><i class="fas fa-heart" id="heart"></i></a>
            <a href="{{ route('profile') }}"><i class="fas fa-user-circle" id="profile"></i></a>
        </div>
    </header>

    <!-- Recipe Grid Section Start -->
    <section class="recipes-grid">
        <?php
        $recipes = [
            ["name" => "Chocolate Cake", "author" => "Chef John", "rating" => "⭐⭐⭐⭐⭐ (5.0)", "image" => "images/chocolate cake.jpg", "description" => "A rich and moist chocolate cake for dessert lovers."],
            ["name" => "Pasta Carbonara", "author" => "Chef Jane", "rating" => "⭐⭐⭐⭐ (4.5)", "image" => "images/pasta carbonara.jpg", "description" => "A creamy pasta dish with bacon and parmesan."],
            ["name" => "Chicken Alfredo", "author" => "Chef Mark", "rating" => "⭐⭐⭐⭐⭐ (5.0)", "image" => "images/chicken alfredo.jpg", "description" => "A classic Alfredo pasta with tender chicken slices."],
            ["name" => "Vegetable Stir-Fry", "author" => "Chef Anna", "rating" => "⭐⭐⭐⭐ (4.3)", "image" => "images/Vegetable-Stir-fry.jpg", "description" => "A quick and healthy stir-fry with fresh veggies."],
            ["name" => "Spaghetti Bolognese", "author" => "Chef Mario", "rating" => "⭐⭐⭐⭐⭐ (5.0)", "image" => "images/spaghetti bolegnese.jpg", "description" => "A hearty Italian pasta with meaty tomato sauce."],
            ["name" => "Caesar Salad", "author" => "Chef Lisa", "rating" => "⭐⭐⭐⭐ (4.4)", "image" => "images/caesar salad.jpg", "description" => "Crispy romaine lettuce with creamy Caesar dressing."],
            ["name" => "Grilled Cheese Sandwich", "author" => "Chef Tom", "rating" => "⭐⭐⭐⭐⭐ (4.8)", "image" => "images/grilled-cheese.jpg", "description" => "A gooey cheese sandwich grilled to perfection."],
            ["name" => "Beef Tacos", "author" => "Chef Juan", "rating" => "⭐⭐⭐⭐⭐ (5.0)", "image" => "images/beef tacos.jpg", "description" => "Soft tacos filled with seasoned beef and toppings."],
            ["name" => "Vegetarian Pizza", "author" => "Chef Emily", "rating" => "⭐⭐⭐⭐⭐ (4.9)", "image" => "images/vegetarian-pizza.jpg", "description" => "A flavorful pizza loaded with fresh veggies."],
            ["name" => "Chicken Tikka Masala", "author" => "Chef Raj", "rating" => "⭐⭐⭐⭐⭐ (5.0)", "image" => "images/chicken masala.jpg", "description" => "Spicy and creamy chicken curry with Indian spices."]
        ];

        foreach ($recipes as $recipe) {
            echo "
            <div class='recipe-card' onclick='openRecipeModal(\"{$recipe['name']}\")'>
                <a href='". route('ingredients') . "?image={$recipe['image']}&name={$recipe['name']}'>
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
                    <!-- Heart button for favorites -->
                    <button class='favorite-button' onclick='toggleFavorite(event, this)'>
                        <i class='fas fa-heart'></i>
                    </button>
                </a>
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
        function openRecipeModal(recipeName) {
            const recipes = {
                "Chocolate Cake": "A rich and moist chocolate cake for dessert lovers.",
                "Pasta Carbonara": "A creamy pasta dish with bacon and parmesan.",
                "Chicken Alfredo": "A classic Alfredo pasta with tender chicken slices.",
                // Add more recipes here...
            };

            document.getElementById('modal-title').innerText = recipeName;
            document.getElementById('modal-description').innerText = recipes[recipeName] || 'No description available.';
            document.getElementById('recipe-modal').style.display = 'block';
        }

        function closeRecipeModal() {
            document.getElementById('recipe-modal').style.display = 'none';
        }

        function toggleFavorite(event, button) {
            event.stopPropagation(); // Prevents the click from bubbling up to the parent div or link
            button.classList.toggle('active');
        }
    </script>
</body>
</html>
