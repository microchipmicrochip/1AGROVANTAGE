<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<h1>Products</h1>

<?php if (!empty($products) && is_array($products)): ?>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                Name: <?= esc($product['name']) ?><br>
                Description: <?= esc($product['description']) ?><br>
                Price: $<?= number_format($product['price'], 2) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>

<?= $this->endSection() ?>