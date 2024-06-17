<?php require_once './parts/header.php';?>


    <div class="container" >
        <h1>Vous pouvez choisir votre billet</h1>
        
        <div class="container mt-5">
        <form action="./scripts/create-ticket.php" method="POST">
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select class="form-control" id="categorie" name="categorie">
                    <option>Hommes</option>
                    <option>Femmes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="groupe">Groupe</label>
                <input type="text" class="form-control" id="groupe" placeholder="Entrez le groupe"  name="groupe">
            </div>
            <div class="form-group">
                <label for="equipes">Équipes1</label>
                <input type="text" class="form-control" id="equipes" placeholder="Entrez les équipes" name="equipe1">
            </div>
            <div class="form-group">
                <label for="equipes">Équipes2</label>
                <input type="text" class="form-control" id="equipes" placeholder="Entrez les équipes" name="equipe2">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" class="form-control" id="date" name="date_heure">
            </div>
            <div class="form-group">
                <label for="lieu">Lieu</label>
                <input type="text" class="form-control" id="lieu" placeholder="Entrez le lieu" name="lieu">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" placeholder="Entrez le prix" name="prix" step="0.01">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Entrez la description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div> 
    <?php require_once './parts/footer.php';?>