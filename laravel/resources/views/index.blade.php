<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="/freeads" id="form">
    <!-- <input name="_token" type="hidden" value="{{csrf_token()}}"/> -->
    @csrf
        <label for="email">Email:</label>
        <input required type="email" name="email" id="email" placeholder="exemple@exemple.com">
        <br><br>
        <label for="password">Mot de passe:</label>
        <input required type="password" name="password" id="password">
        <br><br>
        <div id="submit">
        <input class="inscription" type="submit" name="submit" value="valider">
        </div>
</form>
</body>
</html>