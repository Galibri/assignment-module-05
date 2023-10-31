<?php include_once './templates/header.php'; ?>
<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
}
?>
<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <h2>Create User Role</h2>
            <form action="create_role.php" method="post">
                Email: <input type="email" name="email" required><br>
                Role: <input type="text" name="role" required><br>
                <input type="submit" value="Assign Role">
            </form>

        </div>
    </div>
</div>


<?php include_once './templates/footer.php'; ?>