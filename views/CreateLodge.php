<?php

?>
<div>
    <form action="../public/index.php?uc=lodge&action=create" method="POST" class="form-example">
        <div class="form-example">
            <label for="name">Entrer le nom de l'hébergement: </label>
            <input type="text" name="name" id="name" max="50" placeholder="nom" required>
        </div>
        <div class="form-example">
            <label for="address">Entrer l'adresse de l'hébergement: </label>
            <input type="text" name="address" id="address" max="50" placeholder="adresse" required>
        </div>
        <div class="form-example">
            <label for="city">Entrer la ville de l'hébergement: </label>
            <input type="text" name="city" id="city" max="50" placeholder="ville" required>
        </div>
        <div class="form-example">
            <label for="postalCode">Entrer la code postal de l'hébergement: </label>
            <input type="text" name="postalCode" id="postalCode" max="50" placeholder="code postal" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Créer !" id="create">
        </div>
    </form>
</div>
