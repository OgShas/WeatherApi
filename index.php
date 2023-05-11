<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/style.css">

    <title>Weather</title>
</head>
<body>

<h1>World Weather  Information </h1>

<form action="http_request.php" method="get">
    <br><br><br>
    <label for>City : </label>
    <input type="text" name="city" required>
    <button type="submit" name="submit">Weather</button>
</form>


<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>