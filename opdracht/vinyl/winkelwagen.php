// Start de sessie
<?php
session_start();

if (isset($_POST['toevoegen'])) {
    $product = $_POST['product'];
    $prijs = $_POST['prijs'];

    // Voeg toe aan sessie-winkelwagen
    $_SESSION['winkelwagen'][] = [
        'product' => $product,
        'prijs' => $prijs
    ];
}

// Terug naar de vorige pagina
header('Location: index.php');
exit;
