<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="styles.css">

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>" ></a>
                <?= $post->title; ?>
            </h1>

            <div>
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
