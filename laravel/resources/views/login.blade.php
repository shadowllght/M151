<html>
<head>
<title>Login</title>
<link href="{{ asset('css/styling.scss') }}" rel="stylesheet">
</head>
<body>
<h1>Login</h1>
<form action="/Login" method="POST">
    @csrf
    <label for="email">Email:</label><t>
    <input type="text" id="email" name="email"></input><br>
    <label for="password">password:</label><t>
    <input type="text" id="password" type="hidden" name="password"></input><br>

    <input type="submit" href="loginPage" value="Login">
</form>

</body>
</html>