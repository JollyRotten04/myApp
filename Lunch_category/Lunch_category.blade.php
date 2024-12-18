<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Category</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Lunch.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logoContent">
            <div class="logoName">4B's</div>
        </div>
    
        <div class="navbar">
            <div class="recipe-section">
                <a href="#recipe">Recipe  | </a>
            </div>
            <div class="light-color">
                <a href="#breakfast">Breakfast</a>
            </div>

            <div class="lunch">
                <a href="#lunch">Lunch</a>
            </div>

            <div class="light-color">
                <a href="#dinner">Dinner</a>
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
            <h2>Lunch</h2>
            <div class="recipes-grid">
                <?php
                $recipes = [
                    [
                        "name" => "Adobo",
                        "author" => "Chef Antonette",
                        "rating" => 4.7,
                        "image" => "images/adobo.png"
                    ],
                    [
                        "name" => "Caldereta",
                        "author" => "Chef Kaye",
                        "rating" => 4.4,
                        "image" => "images/Caldereta.jpg"
                    ],
                    [
                        "name" => "Chicken Curry",
                        "author" => "Chef Mae",
                        "rating" => 4.8,
                        "image" => "images/chicken-curry.jpg"
                    ],
                    [
                        "name" => "Chop Suey",
                        "author" => "Chef Seah",
                        "rating" => 4.9,
                        "image" => "images/Chop Suey.jpg"
                    ],
                    [
                        "name" => "Escabeche",
                        "author" => "Chef Bianca",
                        "rating" => 4.8,
                        "image" => "images/Escabeche.jpg"
                    ],
                    [
                        "name" => "Kare-Kare",
                        "author" => "Chef Thea",
                        "rating" => 4.5,
                        "image" => "images/kare-kare.jpg"
                    ],
                    [
                        "name" => "Lumpiang Shanghai",
                        "author" => "Chef Prince",
                        "rating" => 4.7,
                        "image" => "images/lumpiang shanghai.jpg"
                    ],
                    [
                        "name" => "Pinakbet",
                        "author" => "Chef Jake",
                        "rating" => 4.7,
                        "image" => "images/pinakbet.jpg"
                    ],
                    [
                        "name" => "Sinigang",
                        "author" => "Chef Kim",
                        "rating" => 4.9,
                        "image" => "images/Sinigang.jpg"
                    ],
                    [
                        "name" => "Tinola",
                        "author" => "Chef Bianca",
                        "rating" => 4.8,
                        "image" => "images/tinola.jpg"
                    ]
                ];

                foreach ($recipes as $recipe) {
                    echo '<div class="recipe-card">
                            <div class="recipe-image">
                                <img src="' . $recipe['image'] . '" alt="' . $recipe['name'] . '">
                            </div>
                            <div class="recipe-details">
                                <p class="recipe-name">' . $recipe['name'] . '</p>
                                <p class="recipe-author">Recipe by: ' . $recipe['author'] . '</p>
                                <div class="rating">
                                    <span>&#9733;</span>
                                    <span>' . $recipe['rating'] . '</span>
                                </div>
                            </div>
                        </div>';
                }
                ?>
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
