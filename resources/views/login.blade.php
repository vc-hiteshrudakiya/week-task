<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Buyer Login</h2>

@if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="/login">
    @csrf

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<p>
    New user?
    <a href="/register">Register</a>
</p>

</body>
</html>
