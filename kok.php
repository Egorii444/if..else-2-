<!DOCTYPE html>
<html>
<head>
    <title>Определение уровня тренировки</title>
</head>
<body>
<form method="post">
    <label>Введите ваш возраст:</label><br>
    <input type="text" name="age"><br>
    <input type="submit" value="Определить">
</form>

<?php
// Проверяем, был ли отправлен возраст из формы
if(isset($_POST['age'])) {
    // Получаем возраст из формы
    $age = intval($_POST['age']);

    // Определяем уровень тренировки в зависимости от возраста
    if($age <= 18) {
        echo "<p>Ваш уровень тренировки: Начинающий</p>";
    } elseif($age <= 35) {
        echo "<p>Ваш уровень тренировки: Средний уровень</p>";
    } else {
        echo "<p>Ваш уровень тренировки: Профессионал</p>";
    }
}
?>
</body>
</html>