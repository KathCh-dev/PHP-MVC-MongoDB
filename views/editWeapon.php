<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">✏️ Modifier une arme :</h2>

<form action="?action=updateWeapon" method="POST">
    <input type="hidden" name="_id" value="<?= $weapon->getId() ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nom de l'arme :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $weapon->getName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type d'arme :</label>
        <input type="text" class="form-control" id="type" name="type" rows="3" required value="<?= $weapon->getType() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="effect" class="form-label">Effet :</label>
        <input type="text" class="form-control" id="effect" name="effect" value="<?= $weapon->getEffect() ?>" required>
    </div>
    <div class="mb-3">
        <label for="damages" class="form-label">Dégâts :</label>
        <input type="text" class="form-control" id="damages" name="damages" rows="3" required value="<?= $weapon->getDamages() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="precision" class="form-label">Précision :</label>
        <input type="text" class="form-control" id="precision" name="precision" value="<?= $weapon->getPrecision() ?>" required>
    </div>
    <div class="mb-3">
        <label for="fire_rate" class="form-label">Cadence de tir :</label>
        <input type="text" class="form-control" id="fire_rate" name="fire_rate" rows="3" required value="<?= $weapon->getFireRate() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="magazine" class="form-label">Chargeur :</label>
        <input type="text" class="form-control" id="magazine" name="magazine" rows="3" required value="<?= $weapon->getMagazine() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="elementary_bonuses" class="form-label">Bonus élémentaires :</label>
        <input type="text" class="form-control" id="elementary_bonuses" name="elementary_bonuses" rows="3" required value="<?= $weapon->getElementaryBonuses() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="zoom" class="form-label">Zoom (lorsqu'il y en a un) :</label>
        <input type="text" class="form-control" id="zoom" name="zoom" rows="3" value="<?= $weapon->getZoom() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="price" class="form-label">Prix :</label>
        <input type="text" class="form-control" id="price" name="price" rows="3" required value="<?= $weapon->getPrice() ?>"></input>
    </div>
        <div class="mb-3">
        <label for="quantity" class="form-label">Quantité :</label>
        <input type="text" class="form-control" id="quantity" name="quantity" rows="3" required value="<?= $weapon->getQuantity() ?>"></input>
    </div>


    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">Retour à la liste</a>


<?php require_once __DIR__ . '/templates/footer.php'; 