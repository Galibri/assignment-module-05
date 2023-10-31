<?php include_once './templates/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Hello,
                <?php echo $_SESSION['usernmae'] ?? ''; ?>
            </h3>
        </div>
        <div class="col-md-12">
            <a href="role_management.php">Manage Role</a>
        </div>
    </div>
</div>

<?php include_once './templates/footer.php'; ?>