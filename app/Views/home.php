<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<div class="text-center my-5">
    <h1>Welcome to Agrovantage</h1>
    <p class="lead">Your one-stop shop for agricultural products.</p>
    <a href="<?= site_url('products') ?>" class="btn btn-success btn-lg mt-3">Shop Now</a>
</div>
<?= $this->endSection() ?>