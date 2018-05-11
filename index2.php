<?php
header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style2.css">
        <title>Разделение страницы на блоки</title>
    </head>
    <body>
        <div class="conteiner">
            <header class="header">
                
                <h3><b>шапка страницы</b></h3>
               
            </header>

            <div class="left_panel">
                <p><h3>Левая панель</h3></p>
            <p><a href="str1PHP.php" target="blanc" tinle="Блоки страница1">Блоки страница1</a></p>
            <p><a href="str2PHP.php" target="blanc" title="Блоки страница2">Блоки страница2</a></p>

            </div>
            <article class="article">
                <h3>тело</h3>
                <p>fffffffffffffffffffffffffffffff</p>
                <p>fffffffffffffffffffffffffffffff</p>
                <p>fffffffffffffffffffffffffffffff</p>
                <p>fffffffffffffffffffffffffffffff</p>
                <p>fffffffffffffffffffffffffffffff</p>
                <p>fffffffffffffffffffffffffffffff</p>

            </article>

            <div class="clear">
                
            </div>
                 
            <footer class="footer">
                <h3>Подвал</h3>
                <h3>Подвал</h3>
                <h3>Подвал</h3>

            </footer>
        </div>
    </body>
</html>