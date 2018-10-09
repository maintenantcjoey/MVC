<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<section>
    <h1>Category</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['name'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>