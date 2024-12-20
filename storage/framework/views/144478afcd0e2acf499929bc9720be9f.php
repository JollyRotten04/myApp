<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Sign Up Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('<?php echo e(asset('images/background.jpg')); ?>') no-repeat center center fixed; 
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.7); 
            border-radius: 15px;
            overflow: hidden;
            width: 900px;
            height: 500px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .image-section {
            flex: 0.8; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; 
        }

        .form-section {
            flex: 0.6; 
            padding: 30px 70px; 
            background: #111;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            margin-right: 35px;
        }

        .form-section h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #fff;
        }

        .form-section form {
            width: 100%;
        }

        .form-section input,
        .form-section button {
            width: 100%; 
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-section button {
            width: 60%; 
            background: #d2cb75;
            color: #fff;
            cursor: pointer;
            margin: 20px auto;
        }

        .form-section button:hover {
            background: #e64a19;
        }

        .form-section p {
            font-size: 14px;
            color: #ccc;
            margin-top: 10px;
        }

        .form-section a {
            color: #ff5722;
            text-decoration: none;
        }

        .form-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="<?php echo e(asset('images/4Bs_logo.png')); ?>" alt="Logo"> 
        </div>
        <div class="form-section">
            <h1>Sign Up</h1>
            <form method="POST" action="<?php echo e(route('signup.submit')); ?>">
                <?php echo csrf_field(); ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="date" name="birthdate" placeholder="Birthdate" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="<?php echo e(route('login')); ?>">Log In</a></p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\acer\Desktop\myApp\resources\views/signup.blade.php ENDPATH**/ ?>