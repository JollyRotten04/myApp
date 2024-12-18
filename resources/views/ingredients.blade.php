<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4B's Recipe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/rec.css') }}">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

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
        display: flex;
        align-items: center;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
        position: relative;
    }

    .navbar a:hover {
        text-decoration: underline;
    }

    /* Dropdown Styling */
    .recipe-link-container {
        position: relative;
    }

    #recipe-link:hover + #category-dropdown,
    #category-dropdown:hover {
        display: block;
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

    /* Icons */
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

    .recipe-content {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .recipe-header {
        background-color: #f4f4f4;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
    }

    .recipe-header h1 {
        font-size: px;
        font-weight: bold;
        color: #57c559;
        margin: 0;
    }

    .recipe-header .rating {
        display: flex;
        align-items: center;
    }

    .recipe-header .rating span {
        font-size: 18px;
        margin-right: 8px;
        color: #888;
    }

    .recipe-header .rating i {
        color: #ffb400;
        font-size: 18px;
        margin-right: 2px;
    }

    .recipe-image-container {
        text-align: center;
        padding: 20px;
        background-color: #fafafa;
    }

    .recipe-image-container img {
        max-width: 100%;
        border-radius: 10px;
    }

    .details-container {
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    .details-container .ingredients, 
    .details-container .instructions {
        flex: 1;
    }

    .details-container h2 {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 15px;
        border-bottom: 2px solid #f4f4f4;
        padding-bottom: 5px;
        color: #e64a19;
    }

    .details-container ul, 
    .details-container ol {
        padding: 0 20px;
        margin: 0;
    }

    .details-container li {
        font-size: 16px;
        margin-bottom: 10px;
        line-height: 1.5;
        color: #666;
        display: flex;
        align-items: center;
    }

    .details-container li img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
        border-radius: 50%;
        object-fit: cover;
    }

    .description {
        padding: 20px;
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        border-bottom: 1px solid #ddd;
    }

    .rate-section {
        padding: 20px;
        background-color: #fafafa;
        border-top: 1px solid #ddd;
    }

    .rate-section h2 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #444;
    }

    .rate-section .stars {
        margin-bottom: 10px;
    }

    .rate-section .stars i {
        color: #ffb400;
        font-size: 20px;
        margin-right: 5px;
    }

    .rate-section textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 15px;
        resize: vertical;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #ff6f61;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #ff5733;
    }
</style>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="{{ asset('images/4bs_logo.png') }}" alt="4B's Logo"></a>
        </div>

        <nav class="navbar">
            <div class="recipe-link-container">
                <a href="javascript:void(0)" id="recipe-link">Recipe</a>
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
            <!-- Added the menu-bar icon -->
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
    </header>

    <!-- Main Section -->
    <main class="recipe-content">
        <!-- Recipe Image -->
        <div class="recipe-image-container">
            <img src="{{ asset('images/adobo.jpg') }}" alt="Delicious Recipe" class="recipe-img">
        </div>

        <!-- Recipe Header -->
        <div class="recipe-header">
            <h1>Adobo</h1>
            <div class="rating">
                <span>4.8</span>
                <i class="fas fa-heart"></i>
            </div>
        </div>

        <!-- Recipe Description -->
        <p class="description">
            Adobo is a popular Filipino dish known for its savory and tangy flavors, made by simmering meat (commonly chicken or pork) in a marinade of vinegar, soy sauce, garlic, bay leaves, and black peppercorns.
            It’s a versatile dish that pairs perfectly with steamed rice.
        </p>

        <!-- Recipe Details -->
        <div class="details-container">
            <!-- Ingredients Section -->
            <div class="ingredients">
                <h2>Ingredients</h2>
                <ul>
                    <li> 1 kg chicken or pork (or a mix of both)</li>
                    <li> 1/2 cup soy sauce</li>
                    <li> 1/4 cup vinegar</li>
                    <li> 6 cloves garlic, minced</li>
                    <li> 1-2 bay leaves</li>
                    <li> 1 tsp whole black peppercorns</li>
                    <li> 1 cup water</li>
                    <li> 1 tbsp cooking oil</li>
                    <li> Optional: 1-2 potatoes, cubed or 1 boiled egg</li>
                </ul>
            </div>

            <!-- Instructions Section -->
            <div class="instructions">
                <h2>Instructions</h2>
                <ol>
                    <li>Step 1: Marinate the meat in soy sauce, 
                        half the garlic, and peppercorns for at least 30 minutes (or overnight for better flavor).</li>
                    <li>Step 2: In a pot or pan, heat oil and sauté the remaining garlic until golden brown.</li>
                    <li>Step 3: Add the marinated meat (reserve the marinade) and cook until browned on all sides.</li>
                    <li>Step 4: Pour in the marinade, vinegar, and water. Add the bay leaves.</li>
                    <li>Step 5: Simmer on low heat for 30–40 minutes or until the meat is tender. Stir occasionally.</li>
                    <li>Step 6: Optional: Add potatoes or eggs during the last 10 minutes of cooking.</li>
                    <li>Step 7: Taste and adjust the seasoning (add soy sauce or salt as needed).</li>
                    <li>Step 8: Serve hot with rice. Enjoy!</li>
                </ol>
            </div>
        </div>

        <!-- Rating Section -->
        <div class="rate-section">
            <h2>Rate:</h2>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <textarea placeholder="Leave a comment..."></textarea>
        </div>
    </main>

    <script src="{{ asset('js/recipe.js') }}"></script>
    <script>
        // Toggle navbar visibility
        let navbar = document.querySelector('.navbar');
        document.querySelector('#menu-bar').onclick = () => {
            navbar.classList.toggle('active');
        }

        // Toggle search bar visibility
        let search = document.querySelector('.search');
        document.querySelector('#search').onclick = () => {
            search.classList.toggle('active');
        }

        // Handle dropdown hover effect
        document.addEventListener('DOMContentLoaded', () => {
            const recipeLink = document.getElementById('recipe-link');
            const categoryDropdown = document.getElementById('category-dropdown');

            recipeLink.addEventListener('mouseover', () => {
                categoryDropdown.style.display = 'block';
            });

            categoryDropdown.addEventListener('mouseleave', () => {
                categoryDropdown.style.display = 'none';
            });
        });
    </script>
</body>
</html>