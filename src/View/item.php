<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($items as $item) : ?>
            <li><?= $item['titre'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>

