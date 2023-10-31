<?php include_once './templates/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Hello,
                <?php echo $_SESSION['username'] ?? ''; ?>
            </h3>
        </div>
    </div>
</div>

<?php include_once './templates/footer.php'; ?>