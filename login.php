<?php include_once './templates/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="process_login.php" method="post">
                Email: <input type="email" name="email" required><br>
                Password: <input type="password" name="password" required><br>
                <input type="submit" value="Login">
            </form>

        </div>
    </div>
</div>


<?php include_once './templates/footer.php'; ?>