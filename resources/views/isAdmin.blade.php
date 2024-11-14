<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="mainContainer">

        <!-- Main contents -->
        <div id="titleContainer">
            <p id="title">Attention!</p>
        </div>

        <!-- Rest of the contents -->
        <div id="mainLabelContainer">
            <p id="mainLabel">Are you an admin?</p>
        </div>

        <div id="buttonContainer">
            <button id="yesButton">Yes</button>
            <button id="noButton">No</button>
        </div>
    </div>
</body>

<script>
        // Get button elements by their IDs
        const yesButton = document.getElementById('yesButton');
        const noButton = document.getElementById('noButton');

        // Add event listeners to handle button clicks
        yesButton.addEventListener('click', function() {
             // Redirect to the login route
            window.location.href = '/login';
        });

        noButton.addEventListener('click', function() {
            // Redirect to the welcome route
            window.location.href = '/welcome'; 
        });
    </script>
</html>