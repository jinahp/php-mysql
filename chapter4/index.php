<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
                $id = $_GET['id'] ?? 'HTML';
            ?>
        </h2>
        Lorem ipsum dolor sit amet, consectetur egoing adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco egoing laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore egoing eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
    </body>

    <body>
        <h1>WEB</h1>

        <h2>
            <?php
                $id = $_GET['id'] ?? 'HTML';
            ?>
        </h2>
        <?php
            echo nl2br(file_get_contents("data/$id"));
        ?>
    </body>

    
</html>