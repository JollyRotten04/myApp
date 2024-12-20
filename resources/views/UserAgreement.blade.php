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
            <i class="fas fa-heart" id="heart"></i>
            <i class="fas fa-user-circle" id="profile"></i>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="title">
            <div class="user-agreement-container">
                <h2>User Agreement</h2>

                <p>Welcome to <strong>4B's</strong>. Please read this User Agreement carefully before using our website and services. By accessing or using our website, you agree to comply with and be bound by the terms and conditions set forth in this agreement. If you do not agree to these terms, please do not use our website.</p>

                <h3>1. Acceptance of Terms</h3>
                <p>By accessing and using the <strong>4B's</strong> website, you agree to comply with all applicable laws, regulations, and terms outlined in this agreement. If you do not agree to these terms, please refrain from using our services.</p>

                <h3>2. Changes to the Agreement</h3>
                <p>We reserve the right to update or modify this User Agreement at any time without prior notice. Any changes will be effective immediately upon posting. It is your responsibility to review this agreement periodically to stay informed of any updates.</p>

                <h3>3. Use of the Website</h3>
                <p>You agree to use the website and services only for lawful purposes and in accordance with this agreement. You are responsible for all activities that occur under your account.</p>
                <ul>
                    <li>You must not use the website to:
                        <ul>
                            <li>Violate any laws or regulations.</li>
                            <li>Post or transmit harmful, illegal, or offensive content.</li>
                            <li>Disrupt or interfere with the operation of the website.</li>
                        </ul>
                    </li>
                </ul>

                <h3>4. Account Registration</h3>
                <p>To access certain features of the website, you may need to register for an account. You agree to provide accurate, complete, and up-to-date information during the registration process and to maintain the confidentiality of your account information.</p>

                <h3>5. Privacy Policy</h3>
                <p>Your privacy is important to us. Please refer to our <a href="#">Privacy Policy</a> for details on how we collect, use, and protect your personal information.</p>

                <h3>6. Content Ownership</h3>
                <p>All content on the website, including text, images, logos, graphics, and software, is the property of <strong>4B's</strong> or its licensors and is protected by copyright and other intellectual property laws. You may not copy, modify, distribute, or otherwise use the content without permission.</p>

                <h3>7. Third-Party Links</h3>
                <p>Our website may contain links to third-party websites. These links are provided for your convenience, and we are not responsible for the content or practices of these external sites. Please review the terms and privacy policies of any third-party websites you visit.</p>

                <h3>8. Limitation of Liability</h3>
                <p>To the maximum extent permitted by law, <strong>4B's</strong> shall not be liable for any direct, indirect, incidental, special, or consequential damages arising from your use or inability to use the website, even if we have been advised of the possibility of such damages.</p>

                <h3>9. Termination</h3>
                <p>We may suspend or terminate your access to the website at our sole discretion if you violate the terms of this agreement. Upon termination, all rights and licenses granted to you will cease, and you must immediately stop using the website.</p>

                <h3>10. Governing Law</h3>
                <p>This User Agreement is governed by and construed in accordance with the laws of [Your Jurisdiction]. Any disputes arising from this agreement will be subject to the exclusive jurisdiction of the courts in [Your Jurisdiction].</p>

                <h3>11. Contact Information</h3>
                <p>If you have any questions or concerns about this User Agreement, please contact us at:</p>
                <p>Email:  4bspalate@gmail.com</p>
                <p>Phone: +639 1234 56789</p>

                <p>This <strong>User Agreement</strong> is effective as of [Date].</p>
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