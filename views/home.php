<?php 
require_once __DIR__ . '/templates/header.php'; 
require_once __DIR__ . '/../models/Weapon.php';
require_once __DIR__ . '/../vendor/autoload.php';
?>
        
<h2 class="mb-4">📋 Liste des armes</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID :</th>
            <th>Nom :</th>
            <th>Type d'arme :</th>
            <th>Effets :</th>
            <th>Dégâts :</th>
            <th>Précisions :</th>
            <th>Cadence de tir :</th>
            <th>Chargeur :</th>
            <th>Bonus élémentaires :</th>
            <th>Zoom :</th>
            <th>Prix :</th>
            <th>Quantité :</th>
            <th>Actions :</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($weapons as $weapon): ?>
            <tr>
                <td><?= $weapon->getId(); ?></td>
                <td><a href="?action=viewWeapon&_id=<?= $weapon->getId() ?>"><?= $weapon->getName(); ?></a></td>
                <td><?= $weapon->getType(); ?></td>
                <td><?= $weapon->getEffect(); ?></td>
                <td><?= $weapon->getDamages() ?></td>
                <td><?= $weapon->getPrecision(); ?></td>
                <td><?= $weapon->getFireRate(); ?></td>
                <td><?= $weapon->getMagazine() ?></td>
                <td><?= $weapon->getElementaryBonuses(); ?></td>
                <td><?= $weapon->getZoom(); ?></td>
                <td><?= $weapon->getPrice() ?></td>
                <td><?= $weapon->getQuantity() ?></td>
                <td>
                    <a href="?action=viewWeapon&_id=<?= $weapon->getId() ?>" class="btn btn-primary btn-sm">👀</a>
                    <a href="?action=editWeapon&_id=<?= $weapon->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a onclick="return confirm('Cette action est irréversible. êtes-vous sûr ?');" href="?action=deleteWeapon&_id=<?= $weapon->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/templates/footer.php';
