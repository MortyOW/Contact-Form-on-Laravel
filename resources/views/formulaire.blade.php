<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('/style.css')}}">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/formulaire">
        @csrf
        <label for="name">Prénom: </label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <label for="message">Message: </label>
        <input type="text" name="message" id="message">
        <button type="submit">Envoyer </button>
    </form>
</body>
</html>



