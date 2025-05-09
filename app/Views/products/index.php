<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Our Products</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product Name 1</h5>
                    <p class="card-text">Short description of product 1.</p>
                    <p class="card-text"><small class="text-muted">$XX.XX</small></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product Name 2</h5>
                    <p class="card-text">Short description of product 2.</p>
                    <p class="card-text"><small class="text-muted">$YY.YY</small></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product Name 3</h5>
                    <p class="card-text">Short description of product 3.</p>
                    <p class="card-text"><small class="text-muted">$ZZ.ZZ</small></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        </div>
</div>

<?= $this->endSection() ?>