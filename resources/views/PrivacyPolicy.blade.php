<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
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

.privacy-policy-container {
    background-color: #dcdcdc;
    padding: 40px;
    margin: 30px auto;
    width: 80%;
    max-width: 1400px;
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
    <!-- Header Section -->
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
            <div class="privacy-policy-container">
                <h2>Privacy Policy</h2>

                <p>At 4B's, we are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard your personal information when you visit our website or use our services.</p>

                <h3>Information We Collect</h3>
                <p>We may collect the following types of information:</p>
                <ul>
                    <li><strong>Personal Information:</strong> Name, email address, phone number, etc., that you provide when contacting us or signing up for services.</li>
                    <li><strong>Usage Data:</strong> Information about how you use our website and services, such as your IP address, browser type, and the pages you visit.</li>
                </ul>

                <h3>How We Use Your Information</h3>
                <p>Your information is used for the following purposes:</p>
                <ul>
                    <li>To provide and improve our services.</li>
                    <li>To communicate with you about our products, services, and promotions.</li>
                    <li>To personalize your experience on our website.</li>
                    <li>To analyze usage patterns and enhance website functionality.</li>
                </ul>

                <h3>Data Security</h3>
                <p>We take reasonable measures to protect your personal information from unauthorized access, alteration, or disclosure. However, no data transmission over the internet can be guaranteed to be 100% secure.</p>

                <h3>Cookies</h3>
                <p>We use cookies to enhance your experience on our website. Cookies are small files stored on your device that help us analyze website traffic and improve your browsing experience. You can choose to disable cookies through your browser settings, but this may affect your experience on our site.</p>

                <h3>Third-Party Services</h3>
                <p>We may use third-party services (e.g., analytics, payment processors) that may collect, store, or process your data. These third parties have their own privacy policies, and we encourage you to review them.</p>

                <h3>Your Rights</h3>
                <p>You have the right to access, correct, or delete your personal information. If you wish to exercise these rights, please contact us using the information provided below.</p>

                <h3>Changes to This Privacy Policy</h3>
                <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, and the "Last Updated" date at the bottom will reflect the date of the latest revision.</p>

                <h3>Contact Us</h3>
                <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
                <p>Email: 4bspalate@gmail.com</p>
                <p>Phone: +639 1234 56789</p>
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