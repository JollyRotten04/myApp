<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Agreement</title>
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

.recipe-section {
    position: relative;
}

#recipe-link {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
}

#recipe-link:hover {
    text-decoration: underline;
}

#category-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    z-index: 1;
}

#category-dropdown a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

#category-dropdown a:hover {
    background-color: #ddd;
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
.title {
    padding: 30px;
}

.user-agreement-container {
    background-color: #dcdcdc;
    padding: 40px;
    margin: 30px auto;
    width: 80%;
    max-width: 900px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.title h2 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
    color: #000000;
}

.title p {
    line-height: 1.6;
    font-size: 16px;
    margin-bottom: 15px;
}

.title strong {
    font-weight: bold;
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

    .values-container {
        width: 90%;
        padding: 15px;
    }
}

</style>
<body>
    <header class="header">
        <div class="logoContent">
        <a href="{{ route('homepage') }}" style="text-decoration: none;"> <h1 style="color: #B8B07D; font-weight: 800; font-size: 2rem; margin: 0;">4Bs</h1></a>
        </div>
    
        <div class="navbar">
            <div class="recipe-section">
                <a href="#" id="recipe-link">Recipe</a>
                <div class="dropdown-content" id="category-dropdown">
                    <a href="#">Breakfast</a>
                    <a href="#">Lunch</a>
                    <a href="#">Dinner</a>
                </div>
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
        <section class="title">
            <div class="user-agreement-container">
            <h2>Our Values</h2>
    <p>At The 4B's, we believe that food is more than just sustenance—it’s an experience that connects people, cultures, and generations. Our values define who we are as a brand and guide every aspect of our work. We’re dedicated to providing recipes that not only taste great but also inspire creativity, love, and a sense of community in the kitchen.</p>
    
    <p>Our journey is shaped by the belief that food is a powerful tool for fostering connections, creating memories, and building a more sustainable world. As we continue to grow and innovate, we remain true to the core principles that have shaped The 4B's from the very beginning.</p>
    
    <p>Here are the key values that drive us forward:</p>
    
    <ul>
        <li><strong>Integrity:</strong> Integrity is the foundation of everything we do. We ensure that our ingredients are sourced ethically and that our recipes are transparent, with no hidden surprises. Whether it’s through honest labeling or clear cooking instructions, we take pride in being transparent with our customers, always striving to uphold the highest standards.</li> <br>
        
        <li><strong>Quality:</strong> We are committed to delivering the best quality in every dish we share. This means using only the freshest ingredients, supporting local farmers, and avoiding shortcuts that could compromise taste. From the first step of recipe creation to the final bite, quality is at the forefront of every recipe.</li><br>
        
        <li><strong>Creativity:</strong> At The 4B's, we celebrate creativity in cooking. We encourage experimentation in the kitchen, offering recipes that inspire our community to try new flavors and techniques. Our dishes aren’t just about following steps—they’re about discovering new ways to express yourself through food.</li><br>
        
        <li><strong>Community:</strong> Our values are grounded in the idea that food has the power to bring people together. We work to foster a sense of belonging, where everyone can share and enjoy meals with family and friends. We are proud to build a community of like-minded individuals who appreciate the joys of cooking and the bonds it creates.</li><br>
        
        <li><strong>Sustainability:</strong> We are committed to the health of our planet, choosing ingredients that are sustainably sourced and supporting eco-friendly practices in every aspect of our business. Our sustainable approach includes reducing food waste, using recyclable packaging, and promoting responsible cooking practices that have a minimal environmental impact.</li><br>

        <li><strong>Empowerment:</strong> We believe in empowering individuals to embrace their culinary creativity and confidence. Whether you’re a novice in the kitchen or an experienced chef, we provide resources and inspiration to help you cook with confidence, knowing that every meal is a reflection of your unique personality and passion.</li><br>
    </ul>

    <p>Each of these values shapes the way we think about food, cooking, and the impact we have on the world. We’re more than just a recipe website; we’re a community of food lovers, creators, and thinkers who believe in using food to make the world a better place.</p>

    <p>Our commitment to these values will continue to guide us as we innovate and expand. Whether you’re enjoying a family dinner or creating a special meal for friends, we hope to inspire you to cook with passion, creativity, and love—just as we do with every recipe we share.</p>
</div>
        </section>
    </main>
</body>
</html>

<script>
    document.getElementById('recipe-link').addEventListener('click', function() {
        const dropdown = document.getElementById('category-dropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });
</script>
</html>