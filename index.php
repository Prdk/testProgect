
<?php
//header("Content-Type: text/html; charset=utf-8");
require_once 'testHtml2.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Сайт для изучения php</title>
        <link rel="stylesheet" href="style.css">
        <link rel="" href="testHtml2.php">

    </head>
    <body>
        <header class="header">
            <h1>мой сайт</h1>
            <p><b><?php echo "Текушее время: " . $time ."  "." Текущая дата: " . $date; ?></b></p>
            <p>dfgdfgh</p>

        </header>

        <article class="article">
            <div class="left_panel">
                <p><a href="testHtml.html" target="blank" title="Страница testHtml.html">Страница testHtml.html</a></p>
                <p><a href="testPHP.php" target="blank" title="Страница testphp">Страница testphp</a></p>
                <p><a href="testHtml2.php" target="blank" title="Страница testHtml2.php">Страница testHtml2.php</a></p>
                <p>aaaaaaaaaa</p>
            </div>

            <div class="article2">
                <p>Тело страницы</p>
            </div>
        </article>

        <footer class="footer">
            
            <p><h3>2017</h3></p>
            


        </footer>
    </body>
</html>
