<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            <?php if ($product['image']): ?>
                <img src="<?= base_url('uploads/' . $product['image']) ?>" class="img-fluid" alt="<?= esc($product['name']) ?>">
            <?php else: ?>
                <img src="https://via.placeholder.com/500x400?text=No+Image" class="img-fluid" alt="No Image">
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h1 class="mb-3"><?= esc($product['name']) ?></h1>
            <p class="mb-3"><?= esc($product['description']) ?></p>
            <h3 class="text-success fw-bold mb-4">$<?= number_format($product['price'], 2) ?></h3>

            <?php if(session()->get('isLoggedIn')): ?>
                <form action="<?= site_url('cart/add') ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="form-control" style="width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-success">Add to Cart</button>
                </form>
            <?php else: ?>
                <p>Please <a href="<?= site_url('login') ?>" class="text-success">login</a> to add to cart.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>