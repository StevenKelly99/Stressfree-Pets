<?php
$pageTitle = 'List of products';
?>
<?php require_once '_header.php'; ?>
<div class="display_row row">
    <?php foreach ($products as $id => $product): ?>
        <?php
        // format prices to 2 d.p.
        $price = number_format($product['price'], 2);
        ?>
        <div class="product col_20 col text-center">
            <img src="/images/<?= $product['image'] ?>" alt="<?= $product['image'] ?>">
            <?= starsHtml($product['stars']) ?>
            <h4><?= $product['name'] ?></h4>
            <div class="price">
                € <?= $price ?>
                <a href="../public/products.php?action=addToCart&id=<?= $id ?>" class="btn btn-primary btn-sm">Add To Cart</a>
            </div>
            <?= $product['description'] ?>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
