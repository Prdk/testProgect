<?php
//header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Вспоминаем!!!</title>
    </head>
    <body>
        <h3 align="center"><b><font color="red">Пытаемся вспомнить</font></b></h3>

        <form action="test3333.php" method="POST" target="blanck">
            <p><label>Введите логин: <input type="text" name="login" title="Введите логин"></label></p>
            <p><label>Введите пароль: <input type="password" name="password" title="Введите пароль"></label></p>
            <p>Сделайте выбор<select name="sel[]">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>8</option>
                    <option>8</option>
                    <option>8</option>
                    <option>8</option>
                    <option>8</option>
                </select></p>

            <p><input type="submit" value="нажми меня" title="Отправить форму">
               <input type="reset" titie="Очистить форму">
            </p>

        </form>

    </body>
</html>

