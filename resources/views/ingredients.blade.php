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
    padding left word-spacing: 5cm;
    display: flex;
    justify-content: inline;
    align-items: center;
    border-bottom: 1px solid #ddd;
}

.recipe-header h1 {
    font-size: px;
    font-weight: bold;
    color: #57c559;
    margin-right: 7cm;
}

.recipe-header .rating {
    display: flex;
    align-items: center;
    gap: 3cm; 
}

.recipe-header .rating span {
    font-size: 18px;
    margin-right: 8px;
    color: #888;
}

#star-rating {
    display: flex;
}

#star-rating .fas {
    font-size: 20px;
}

#star-rating .fas.fa-heart {
    color: #888;
    transition: color 0.3s ease;
}

#heart-icon {
    font-size: 30px;
    color: #888; /* Default unlit color (grey) */
    transition: color 0.3s ease; /* Smooth color transition */
    margin-left: 8.5cm;
}

#heart-icon.liked {
    color: red; /* Lit up color when clicked (red) */
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

    a{
        text-decoration: none;
    }
    
    .submit-comment-btn {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #ff6f61;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
    width: 100%;
}

.submit-comment-btn:hover {
    background-color: #ff5733;
}

</style>

<body>
    <header class="header">
        <div class="logoContent">
        <a href="{{ route('homepage') }}"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>

        <nav class="navbar">
            <div class="recipe-link-container">
                <a href="{{ route('recipe') }}" id="recipe-link">Recipe</a>
                <div class="dropdown" id="category-dropdown">
                    <a href="{{ route('breakfast') }}">Breakfast</a>
                    <a href="{{ route('lunch') }}">Lunch</a>
                    <a href="{{ route('dinner') }}">Dinner</a>
                </div>
            </div>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <a href="{{ route('favorites') }}"><i class="fas fa-heart" id="heart"></i></a>
            <a href="{{ route('profile') }}"><i class="fas fa-user-circle" id="profile"></i></a>
            <!-- Added the menu-bar icon -->
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
    </header>

    <!-- Main Section -->
    <main class="recipe-content">
        <!-- Recipe Image -->
        <div class="recipe-image-container">
            <img src="{{ $image }}" alt="Delicious Recipe" class="recipe-img">
        </div>

        <div class="recipe-header">
        <h1><p>{{ $recipe->recipe_name }}</p></h1>
    <div class="starrating">
        <span>4.8</span>
        <i class="fas fa-star" style="color: #ffb400;"></i>
    </div>
    <i class="fas fa-heart" id="heart-icon"></i>

</a>
    </div>
</div>
</div>


        <!-- Recipe Description -->
        <p class="description">
            {{ $recipe->recipe_description }}
        </p>

        <!-- Recipe Details -->
        <div class="details-container">
            <!-- Ingredients Section -->
            <div class="ingredients">
                <h2>Ingredients</h2>
                <p>{!! nl2br(e($recipe->recipe_ingredients)) !!}</p>
            </div>

            <!-- Instructions Section -->
            <div class="instructions">
                <h2>Instructions</h2>
                <p>{!! nl2br(e($recipe->recipe_instructions)) !!}</p>
            </div>
        </div>

<!-- Rating Section -->
<div class="rate-section">
    <h2>Rate:</h2>
    <div class="stars" id="star-rating">
        <i class="fas fa-star" data-rating="1"></i>
        <i class="fas fa-star" data-rating="2"></i>
        <i class="fas fa-star" data-rating="3"></i>
        <i class="fas fa-star" data-rating="4"></i>
        <i class="fas fa-star" data-rating="5"></i>
    </div>
    
    <!-- Comment Form -->
    <form id="comment-form">
        <textarea id="comment-text" placeholder="Leave a comment..."></textarea>
        <button type="submit" class="submit-comment-btn">Submit</button>
    </form>

    <!-- Confirmation Message -->
    <div id="confirmation-message" style="display: none; color: #57c559; margin-top: 10px;">
        Your ratings & comments has been submitted!
    </div>

    <!-- Display Comment Section -->
    <div id="user-comments" style="display: none; margin-top: 10px; font-size: 16px; color: #333;">
        <h3>Your Ratings & Comments:</h3>
        <div id="comments-list"></div>
    </div>
</div>

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
        
    // Handle star rating system
const stars = document.querySelectorAll('#star-rating .fas');
let selectedRating = 0;

// Add click event to each star
stars.forEach(star => {
    star.addEventListener('click', function() {
        // Get the rating value
        selectedRating = this.getAttribute('data-rating');
        
        // Highlight the selected stars
        stars.forEach(star => {
            star.style.color = (star.getAttribute('data-rating') <= selectedRating) ? '#ffb400' : '#ddd';
        });
    });
});

// Handle comment submission
document.getElementById('comment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    const commentText = document.getElementById('comment-text').value;

    // Only add comment if there's text and a rating
    if (commentText.trim() !== '' && selectedRating > 0) {
        // Create a new div for the comment
        const newComment = document.createElement('div');
        newComment.style.marginBottom = '10px';

        // Create the comment content
        newComment.innerHTML = `<strong>Rating: ${selectedRating} stars</strong><br>${commentText}`;

        // Append the new comment to the comments list
        document.getElementById('comments-list').appendChild(newComment);

        // Show the confirmation message and comments list
        document.getElementById('confirmation-message').style.display = 'block';
        document.getElementById('user-comments').style.display = 'block';

        // Clear the textarea and reset the stars
        document.getElementById('comment-text').value = '';
        stars.forEach(star => star.style.color = '#ddd');
        selectedRating = 0;
    } else {
        alert('Please provide a rating and comment!');
    }
});

// Get the heart icon element
const heartIcon = document.getElementById('heart-icon');

// Toggle the like state when the heart icon is clicked
heartIcon.addEventListener('click', function() {
    // Toggle the 'liked' class on the heart icon
    heartIcon.classList.toggle('liked'); // Adds or removes the 'liked' class

    // Check and log the state of the heart (liked or unliked)
    if (heartIcon.classList.contains('liked')) {
        console.log('Recipe added to favorites'); // Liked state
    } else {
        console.log('Recipe removed from favorites'); // Unliked state
    }
});


    </script>
</body>
</html>