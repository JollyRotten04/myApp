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


        .recipe-card {
            width: 220px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
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

        a{
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


    <!-- Favorites Section -->
    <section class="favorites-section">
        <h2>Your Favorites &#10084;</h2>
        <div class="recipes-grid">
            <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="recipe-card">
                <a href="<?php echo e(route('ingredients')); ?>?image=<?php echo e($recipe['image']); ?>&name=<?php echo e($recipe['name']); ?>">
                <div class="recipe-image">
                    <img src="<?php echo e(asset('images/images/' . $recipe['image'])); ?>" alt="<?php echo e($recipe['name']); ?>">
                </div>
                <div class="recipe-details">
                    <p><?php echo e($recipe['name']); ?></p>
                    <p class="recipe-author">By: <?php echo e($recipe['author']); ?></p>
                    <div class="rating">
                        <span>&#9733;</span> <span><?php echo e($recipe['rating']); ?></span>
                    </div>
                </div>
                <button class="favorite-button">&#10084;</button>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
</body>
</html>
<?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/favorites.blade.php ENDPATH**/ ?>