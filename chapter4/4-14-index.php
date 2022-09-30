<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="4-14-index.php?id=HTML">HTML</a></li>
            <li><a href="4-14-index.php?id=CSS">CSS</a></li>
            <li><a href="4-14-index.php?id=JavaScript">JavaScript</a></li>
            <li><a href="4-14-index.php?id=PHP">PHP</a></li>
        </ol>
        <h2>
            <?php
               echo $id = $_GET['id'] ?? 'HTML';
            ?>
        </h2>
        <?php
            echo nl2br(file_get_contents("data/$id"));
        ?>
    </body>

    <body>
        <h1><a href="4-14-index.php">WEB</a></h1>
        <ol>
            <?php
                $list = array('CSS', 'HTML', 'JavaScript', 'PHP');
                foreach($list as $item) {
                   echo "<li><a href=\"4-14-index.php?id=$item\">$item</a></li>";
                }
            ?>
        </ol>
    </body>
</html>