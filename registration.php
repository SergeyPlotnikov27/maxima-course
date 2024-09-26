<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxima-course</title>
</head>

<body>
    <h1>Регистрация</h1>
    <form action="user.php" method="POST">
        <label for="login">Логин</label>
        <input type="text" name="login" placeholder="Логин">
        <label for="password">Пароль</label>
        <input type="text" name="password" placeholder="Пароль">
        <label for="repeatPassword">Повторите пароль</label>
        <input type="text" name="repeatPassword" placeholder="Повторите пароль">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>