<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="mainContainer">

        <div id="titleContainer">
            <p id="titleLabel">Welcome Admin!</p>
        </div>

        <!-- Form for username and password -->
        <form id="adminForm" action="{{ route('adminPage') }}" method="POST">
            @csrf <!-- Include CSRF token for security -->

            <div id="inputFields">
                <div id="adminUsernameContainer">
                    <p id="label">Please enter your username: </p>
                    <input type="text" name="username" id="usernameInput" placeholder="Enter your username" required>
                </div>

                <div id="adminPasswordContainer">
                    <p id="label">Please enter your password: </p>
                    <input type="password" name="password" id="passwordInput" placeholder="Enter your password" required>
                </div>
            </div>

            <div id="submitButtonContainer">
                <button type="submit" id="submitButton">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    submitButton.addEventListener('click', function() {
    const username = usernameInput.value;
    const password = passwordInput.value;

    fetch('/adminPage', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add this for CSRF protection in Laravel
        },
        body: JSON.stringify({ username, password })
    })
    .then(response => {
        if (response.ok) {
            window.location.href = '/adminPage';
        }
    });
});

</script>
</html>
