<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détail de l'arme :</h2>

<p><strong>Nom de l'arme : </strong> <?= $weapon->getName() ?></p>
<p><strong>Type d'arme : </strong> <?= $weapon->getType() ?></p>
<p><strong>Effets : </strong> <?= $weapon->getEffect() ?></p>
<p><strong>Dégâts : </strong> <?= $weapon->getDamages() ?></p>
<p><strong>Précision : </strong> <?= $weapon->getPrecision() ?></p>
<p><strong>Cadence de tir : </strong> <?= $weapon->getFireRate() ?></p>
<p><strong>Chargeur : </strong> <?= $weapon->getMagazine() ?></p>
<p><strong>Bonus élémentaires : </strong> <?= $weapon->getElementaryBonuses() ?></p>
<p><strong>Zoom : </strong> <?= $weapon->getZoom() ?></p>
<p><strong>Prix : </strong> <?= $weapon->getPrice() ?></p>
<p><strong>Quantité : </strong> <?= $weapon->getQuantity() ?></p>

<a href="?action=editWeapon&_id=<?= $weapon->getId() ?>" class="btn btn-warning">Modifier l'arme</a>
<a href="?" class="btn btn-secondary">Retour à la liste</a>

<?php require_once __DIR__ . '/templates/footer.php'; 