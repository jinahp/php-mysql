<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
        <body>
            <h1>function</h1>
            <?php
                $str = "Lorem ipsum dolor sit amet, consectetur egoing adipisicing elit.
                
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                echo $str;
                ?>     
                
                <h2>nl2br()</h2>
                <?php
                    echo nl2br($str).'<br>';
                ?>
                <br>
                <?php
                    $str = "한글은 한 글자에 3byte";
                    echo $str;
                ?>
                <?php
                    $id = $_GET['id'] ?? 'HTML';
                ?>
                </body>
</html>