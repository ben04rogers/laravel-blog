<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="styles.css">

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
