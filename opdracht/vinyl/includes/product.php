
<?php
include('includes/header.php');?>
<?php
// products.php
$products = [
    [
        'id' => 'product1',
        'name' => 'The Fat Of The Land',
        'price' => 19.99,
        'description' => 'Beschrijving van product 1',
        'img' => '<img src="https://media.s-bol.com/R6oV7yg0QN8V/550x411.jpg">',
    ],
    [
        'id' => 'product2',
        'name' => 'Currents',
        'price' => 29.99,
        'description' => 'Beschrijving van product 2',
        'img' => '<img src="https://media.s-bol.com/xkkG7Wwj7o2r/550x411.jpg" width="640" height="640">',
    ],
    [
        'id' => 'product3',
        'name' => 'The Best Of Sade',
        'price' => 39.99,
        'description' => 'Beschrijving van product 3',
        'img' => '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Dnk2_KQIezrnNCILuHOtQus-6acxNtHnqA&s">',
    ],
    [
        'id' => 'product4',
        'name' => 'The Slow Rush',
        'price' => 29.99,
        'description' => 'Beschrijving van product 4',
        'img' => '<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxESEhUTExIVFhUVFRUVFRcVEhUVFRYWFRUYFhcVGBcYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGRAQGi0dHx0tLi0tLi0rKy0tLS0tNy0tLS0tLS0tLS0tLSstLS0tLS0tKy0tLS0tLS0tLS0tLS0tK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAwIEBQYHAQj/xABLEAACAQICBQYHDAkDBAMAAAAAAQ'id'EQQhBRIxQVEGB2FxkdEiVIGTobHwCBMUFzIzQlJyc7LBIyQ0YoKSs9LhFUNTosLi8RZEg//EABsBAQADAQEBAQAAAAAAAAAAAAABAgMEBQYH/8QAMhEAAgECAwYCCg'id'AAAAAAAAAAECAxEEEiETMTJRgbFS',
    
    ],
    [
        'id' => 'product5',
        'name' => 'Scaring The Hoes',
            'price' => 24.99,
        'description' => 'Beschrijving van product 5',
        'img src="https://miro.medium.com/v2/resize:fit:1400/1*QS9yXLEdAozH3-IFHA0aSQ.jpeg">',
    ],
    [
        'id' => 'product6',
        'name' => 'DAMN',
        'price' => 29.99,
        'description' => 'Beschrijving van product 6',
        'img' => '<img src="https://media.s-bol.com/xOvKlD01o4J/550x371.jpg">',
    ],
    [
        'id' => 'product7',
        'name' => 'Rodeo',
        'price' => 29.99,
        'description' => 'Beschrijving van product 7',
        'img' => '<img src="https://travisscott.rosecityworks.com/cdn/shop/files/Travis-Scott-Rodeo-2LP-1500.png?v=1698376968&w=1445">',
    ],
    [
        'id' => 'product8',
        'name' => 'I Lay Down My Life For You',
        'price' => 24.99,
        'description'   => 'Beschrijving van product 8',
        'img' => '<img src="https://cdn.shopify.com/s/files/1/0551/6066/8345/products/bob-marley-the-wailers-exodus-vinyl-lp-record-900715_x300.jpg?v=1706273328">',
    ],
    [
        'id' => 'product9',
        'name' => 'Discovery',
        'price' => 36.99,
        'description'   => 'Beschrijving van product 9',
        'img' => '<img src="https://winylownia.pl/hpeciai/c53502bfc7d1bab83d2db6857fa152d8/eng_pl_DAFT-PUNK-Discovery-2LP-143262_1.webp">',
    ],
    [
        'id' => 'product10',
        'name' => 'Veteran',
        'price' => 39.99,
        'description' => 'Beschrijving van product 10',
        'img' => '<img src="https://imusic.b-cdn.net/images/item/original/043/0843563174043.jpg?jpegmafia-2024-veteran-lp&class=scaled&v=1712574176">',
    ],
    [
        'id' => 'product11',
        'name' => 'Exodus',
        'price' => 34.99,
        'description' => 'Beschrijving van product 11',
        'img' => '<img src="https://cdn.shopify.com/s/files/1/0551/6066/8345/products/bob-marley-the-wailers-exodus-vinyl-lp-record-900715_x300.jpg?v=1706273328">',
    ],
    [
        'id' => 'product12',
        'name' => 'I Lay Down My Life For You',
        'price' => 29.99,
        'description' => 'Beschrijving van product 12',
        'img' => '<img src="https://cdn.shoplightspeed.com/shops/613549/files/66890600/800x1024x2/peggy-lp-jpegmafia-i-lay-down-my-life-for-you-whit.jpg">',
    ],

    [
        'id' => 'product13',
        'name' => 'Discovery',
        'price' => 24.99,
        'description' => 'Beschrijving van product 13',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product14',
        'name' => 'Me Against The World',
        'price' => 29.99,
        'description' => 'Beschrijving van product 14',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product15',
        'name' => 'Good kid, m.A.A.d city',
        'price' => 34.99,
        'description' => 'Beschrijving van product 15',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product16',
        'name' => 'K.I.D.S',
        'price' => 39.99,
        'description' => 'Beschrijving van product 16',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product17',
        'name' => 'Channel Orange',
        'price' => 24.99,
        'description' => 'Beschrijving van product 17',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product18',
        'name' => 'Rodeo',
        'price' => 29.99,
        'description' => 'Beschrijving van product 18',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product19',
        'name' => 'Astroworld',
        'price' => 34.99,
        'description' => 'Beschrijving van product 19',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ],
    [
        'id' => 'product20',
        'name' => 'Music For The Jilted Generation',
        'price' => 39.99,
        'description' => 'Beschrijving van product 20',
        'img' => '<img src="https://example.com/new-product.jpg">',
    ]
    [
        'id' => 'product21',
        'name' => 'Man On The Moon I End Of the Day',	
        'price' => 34.99,
        'description' => 'Beschrijving van product 21',
        'img' => '<img src="https://example.com/man-on-the-moon.jpg">',
    ],
    [
        'id' => 'product22',
        'name' => 'Man On The Moon II The Legend Of Mr. Rager',
        'price' => 29.99,
        'description' => 'Beschrijving van product 22',
        'img' => '<img src="https://example.com/new-product22.jpg">',
    ],
    [
        'id' => 'product23',
        'name' => 'Man On The Moon III The Chosen',
        'price' => 34.99,
        'description' => 'Beschrijving van product 23',
        'img' => '<img src="https://example.com/new-product23.jpg">',
    ],
    [
        'id' => 'product24',
        'name' => 'Flower Boy',
        'price' => 29.99,
        'description' => 'Beschrijving van product 24',
        'img' => '<img src="https://example.com/new-product24.jpg">',
    ]
    
];
foreach ($products as $product) {
    echo '<div class="product">';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>' . $product['description'] . '</p>';
    echo '<p>Price: €' . number_format($product['price'], 2) . '</p>';
    echo $product['img'];
    echo '<a href="cart.php?id=' . $product['id'] . '">Add to Cart</a>';
    echo '</div>';
}
<?php foreach ($producten as $product): ?>
    <div class="product">
        <img src="<?= htmlspecialchars($product['afbeelding']) ?>" alt="<?= htmlspecialchars($product['titel']) ?>">
        <h2><?= htmlspecialchars($product['titel']) ?></h2>
        <p><?= htmlspecialchars($product['beschrijving']) ?></p>
        <p>€<?= number_format($product['prijs'], 2, ',', '.') ?></p>
        
        <form method="post" action="winkelwagen.php">
            <input type="hidden" name="product" value="<?= htmlspecialchars($product['titel']) ?>">
            <input type="hidden" name="prijs" value="<?= htmlspecialchars($product['prijs']) ?>">
            <button type="submit" name="toevoegen">Toevoegen aan winkelwagen</button>
        </form>
    </div>
<?php endforeach; ?>



?>

     <?php
include('includes/footer.php');
?>

</html>
