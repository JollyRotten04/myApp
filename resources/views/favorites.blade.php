<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4B's Recipe Favorites</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            color: white;
            padding: 10px 20px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header a {
            display: inline-block;
            margin-right: 15px;
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        header i {
            margin-right: 10px;
            cursor: pointer;
        }

        header img {
            width: 50px;
            height: auto;
        }

        /* Section Styles */
        .favorites-section {
            padding: 20px;
        }

        .favorites-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Recipe Grid */
        .recipes-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
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

        .recipe-card {
            width: 220px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .recipe-image {
            width: 100%;
            height: 140px;
            overflow: hidden;
        }

        .recipe-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .recipe-details {
            padding: 10px;
            text-align: center;
        }

        .recipe-details p {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .recipe-details .recipe-author {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .rating {
            color: #f39c12;
            font-size: 14px;
        }

        /* Favorite Button */
        .favorite-button {
            width: 100%;
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div>
            <a href="{{ route('homepage') }}"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>
        <nav class="navbar">
            <a href="{{ route('recipe') }}">Recipe</a>
            <div class="dropdown">
                <a href="{{ route('breakfast') }}">Breakfast</a>
                <a href="{{ route('lunch') }}">Lunch</a>
                <a href="{{ route('dinner') }}">Dinner</a>
            </div>
        </nav>
        <div>
            <i class="fas fa-search"></i>
            <i class="fas fa-heart"></i>
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <!-- Favorites Section -->
    <section class="favorites-section">
        <h2>Your Favorites &#10084;</h2>
        <div class="recipes-grid">
            @foreach ($recipes as $recipe)
            <div class="recipe-card">
                <div class="recipe-image">
                    <img src="{{ asset('images/images/' . $recipe['image']) }}" alt="{{ $recipe['name'] }}">
                </div>
                <div class="recipe-details">
                    <p>{{ $recipe['name'] }}</p>
                    <p class="recipe-author">By: {{ $recipe['author'] }}</p>
                    <div class="rating">
                        <span>&#9733;</span> <span>{{ $recipe['rating'] }}</span>
                    </div>
                </div>
                <button class="favorite-button">&#10084;</button>
            </div>
            @endforeach
        </div>
    </section>
</body>
</html>
