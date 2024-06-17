<?php require_once 'parts/header.php';

try {
    $connectDataBase = new PDO("mysql:host=db;dbname=wordpress", "root", "admin");
    $connectDataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connectDataBase->prepare("SELECT * FROM post");
    $request->execute();
    $posts = $request->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<div id="post-message" class="card" style="width: 25rem;">
    <div class="card-body">
        <ul class="formulary" id="forme">
            <?php foreach ($posts as $post) : ?>
                <li>
                    <strong><?php echo $post['id']; ?></strong>
                    <ul>
                        <li><?php echo $post['categorie']; ?></li>
                        <li><?php echo $post['groupe']; ?></li>
                        <li><?php echo $post['equipe1']; ?> vs <?php echo $post['equipe2']; ?></li>
                        <li><?php echo $post['date_heure']; ?></li>
                        <li><?php echo $post['lieu']; ?></li>
                        <li><?php echo $post['prix']; ?>€</li>
                        <li><?php echo $post['description']; ?></li>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
        <form method="POST" action="scripts/delete-ticket.php">
                        <button type="submit" class="btn btn-outline-danger m-1" name="id" value="<?php echo $post['id']; ?>">Supprimer</button>
                    </form>
                    <form method="POST" action="/update-carte.php">
                        <button type="submit" class="btn btn-outline-warning m-1" name="id" value="<?php echo $post['id']; ?>">Modifier</button>
                    </form>
    </div>
</div>

<?php require_once 'parts/footer.php'; ?>
