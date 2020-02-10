<section class='intro'>

<h1> Bienvenue sur notre merveilleux blog ! </h1>

</section>


<h1>Nos articles</h1>

<?php foreach ($articles as $article) : ?>
    <article>
        <h2><?= $article['title'] ?></h2>
        <small><i>Ecrit le <?= $article['created_at'] ?></i></small>

        <div class='contentArticle'>
            <p><?= $article['introduction'] ?></p>
        </div>
        
        <a class='btn btn-success' href="index.php?controller=article&task=show&id=<?= $article['id'] ?>">Lire la suite</a>
        <a class='btn btn-secondary' href="index.php?controller=article&task=delete&id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)">Supprimer</a>
    </article>
<?php endforeach ?>
<br>