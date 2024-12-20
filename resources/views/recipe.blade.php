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
        cursor: pointer;
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
        color: #ccc;
        font-size: 20px;
        cursor: pointer;
    }

    .favorite-button.active {
        color: red;
    }

    a {
        text-decoration: none;
    }
 /* Icons Section */
 .icon {
            display: flex;
            align-items: center;
            size: 5cm;
        }

        .icon i {
            font-size: 20px;
            color: #fff;
            margin-left: 15px;
            cursor: pointer;
        }

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

        // dd([
        //     'recipe_name' => 'Adobo',
        //     'recipe_description' => <<<EOT
        // Adobo is a popular Filipino dish known for its savory and tangy flavors...
        // EOT,
        //     'recipe_instructions' => <<<EOT
        // Step 1: Marinate the meat...
        // EOT,
        //     'recipe_ingredients' => <<<EOT
        // 1 kg chicken...
        // EOT
        // ]);
        

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
                <!-- Heart button for favorites -->
                <button class='favorite-button' onclick='toggleFavorite(event, this)'>
                    <i class='fas fa-heart'></i>
                </button>
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
