<?php

require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape('red', 50, 50, 150, 100);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>
<body>
    <div
        style="
            position: absolute;
            left: <?= $shape->getX() ?>px;
            top: <?= $shape->getY() ?>px;
            width: <?= $shape->getWidth() ?>px;
            height: <?= $shape->getHeight() ?>px;
            background-color: <?= htmlspecialchars($shape->getColor(), ENT_QUOTES, 'UTF-8') ?>;
        "
    ></div>
</body>
</html>