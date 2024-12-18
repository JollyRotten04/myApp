<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed; 
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
        
        .forgot-password {
            font-size: 14px;
            color: #ff5722;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="{{ asset('images/4Bs_logo.png') }}" alt="Logo"> 
        </div>
        <div class="form-section">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>
            <p>Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a></p>
            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>

             <!-- Check if there's an error message in the session -->
            @if(session('error'))
                <script type="text/javascript">
                    alert("{{ session('error') }}"); // Show error message in a popup
                </script>
            @endif
        </div>
    </div>
</body>
</html>
