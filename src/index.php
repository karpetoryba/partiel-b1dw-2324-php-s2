<?php require_once './parts/header.php';?>


    <div class="container">
        <h1>Vous pouvez choisir votre billet</h1>
        
        <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="evenement">Événement (Match)</label>
                <input type="text" class="form-control" id="evenement" placeholder="Entrez l'événement">
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select class="form-control" id="categorie">
                    <option>Hommes</option>
                    <option>Femmes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="groupe">Groupe</label>
                <input type="text" class="form-control" id="groupe" placeholder="Entrez le groupe">
            </div>
            <div class="form-group">
                <label for="equipes">Équipes</label>
                <input type="text" class="form-control" id="equipes" placeholder="Entrez les équipes">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="heure">Heure</label>
                <input type="time" class="form-control" id="heure">
            </div>
            <div class="form-group">
                <label for="lieu">Lieu</label>
                <input type="text" class="form-control" id="lieu" placeholder="Entrez le lieu">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" placeholder="Entrez le prix">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Entrez la description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div> 
    <?php require_once './parts/footer.php';?>