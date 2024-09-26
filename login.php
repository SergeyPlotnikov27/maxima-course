<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxima-course</title>
</head>

<body>
    <h1>Вход</h1>
    <form action="user.php" method="POST">
        <label for="remember">Логин</label>
        <input type="text" name="login" placeholder="Логин">
        <label for="remember">Пароль</label>
        <input type="text" name="password" placeholder="Пароль">
        <label for="remember">Запомнить меня</label>
        <input type="checkbox" name="remember" value="0">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>