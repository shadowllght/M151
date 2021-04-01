<html>

<head>
    <title>Registrieren</title>
    <link href="{{ asset('css/styling.scss') }}" rel="stylesheet">
</head>

<body>
    <h1>Registrieren</h1>
    <form action="/registerUser" method="POST">
        @csrf
        <label for="vorname">Vorname:</label>
        <input type="text" id="first_name" name="vorname"></input><br>
        <label for="nachname">Nachname:</label>
        <input type="text" id="last_name" name="nachname"></input><br>
        <label for="strasse">Strasse:</label>
        <input type="text" id="street" name="strasse"></input><br>
        <label for="text">Stadt:</label>
        <input type="text" id="city" name="stadt"></input><br>
        <label for="zip">Postleitzahl:</label>
        <input type="text" id="zip" name="postleitzahl"></input><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"></input><br>
        <label for="handy">Handy:</label>
        <input type="text" id="phone" name="handy"></input><br>
        <label for="password">password:</label>
        <input type="text" id="password" type="hidden" name="password"></input><br>
        <input type="submit" href="registerUser" value="Registrieren">
    </form>
    <button onclick="window.location.href='/login'">Redirect to login</button>
</body>

</html>