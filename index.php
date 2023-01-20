<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="sandmail.php" method="post">
        <select name="subject">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос по уроку</option>
            <option value="2">Личный вопрос</option>
            <option value="3">Благодарность</option>
        </select>
        <input type="email" name="email" placeholder="Введите ваш email" maxlength="50" required>
        <textarea name="message" placeholder="Введите сообщение" maxlength="150" required></textarea>
        <img src="capcha1.jpg">
        <input type="number" name="capcha" placeholder="Введите ответ" maxlength="3" required>
        <input type="submit" value="Отправить письмо">
    </form>
</body>
</html>