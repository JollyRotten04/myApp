<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <div id="mainContainer">
        <h1>Welcome, Admin!</h1>

        @if(session('username'))
            <p>Hello, {{ session('username') }}! You have successfully logged in.</p>
        @else
            <p>Welcome to the Admin Page!</p>
        @endif
    </div>
</body>
</html>
