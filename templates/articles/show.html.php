<section id='blogElts'>

    <h1><?= "<i>Podcast :</i> " . $article['title'] ?></h1>

    <article class='detailArticle'>
        <small>Ecrit le <?= $article['created_at'] ?></small>
        <p><?= $article['introduction'] ?></p>
        <hr>
        <?= $article['content'] ?>
    </article>

    <article class='commentaires'>
        <?php if (count($commentaires) === 0) : ?>
            <h2>Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h2>
        <?php else : ?>
            <h2>Il y a déjà <?= count($commentaires) ?> réactions : </h2>
            <?php foreach ($commentaires as $commentaire) : ?>
                <aside>
                    <h3>Commentaire de <?= $commentaire['author'] ?></h3>
                    <small>Le <?= $commentaire['created_at'] ?></small>
                    <blockquote>
                        <em><?= $commentaire['content'] ?></em>
                    </blockquote>
                    <a class='btn btn-secondary' href="index.php?controller=comment&task=delete&id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
                </aside>
            <?php endforeach ?>
        <?php endif ?>
    </article>

</section>
<br>
<form action="index.php?controller=comment&task=insert" method="POST">
    <h3>Vous voulez réagir ? N'hésitez pas les bros !</h3>

    <div class="form-group">
        <input type="text" class="form-control" name="author" placeholder="Votre pseudo !">
    </div>

    <div class="form-group">
        <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Votre commentaire ..."></textarea>
    </div>

    <div class="form-group">
        <input type="hidden" class="form-control" name="article_id" value="<?= $article_id ?>">
    </div>

    <button class="btn btn-secondary">Commenter !</button>
</form>