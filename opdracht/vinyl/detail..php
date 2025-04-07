
<?php
session_start(); // Alleen nodig als je iets met sessie wil doen (zoals winkelmandje)
include('includes/header.php');

// Je producten array moet hier ook bekend zijn
include('products-array.php'); // of zet gewoon de array hier ook weer neer

// Haal het ID op uit de URL
$id = $_GET['id'] ?? null;

$gevondenProduct = null;

// Zoek het juiste product
foreach ($products as $product) {
    if ($product['id'] === $id) {
        $gevondenProduct = $product;
        break;
    }
}
?>

<?php if ($gevondenProduct): ?>
    <h1><?= $gevondenProduct['name'] ?></h1>
    <?= $gevondenProduct['img'] ?>
    <p><?= $gevondenProduct['description'] ?></p>
    <strong>Prijs: €<?= $gevondenProduct['price'] ?></strong>
<?php else: ?>
    <p>Product niet gevonden.</p>
<?php endif; ?>


