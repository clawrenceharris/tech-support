<?php include 'header.php'; ?>
<main>
    <h1>Customer Login</h1>
    <p>You must login before you can register a product.</p>
    <?php if (isset($_SESSION['customerID'])) : ?>
        <p>You are already logged in. <a href=".?action=show_register_form">Register Product</a></p>
    <?php else : ?>
        <form action="." method="post">
            <input type="hidden" name="action" value="login">
            <label>Email:</label>
            <input type="email" name="email"><br>
            <input type="submit" value="Login">
        </form>
    <?php endif; ?>
</main>
<?php include 'footer.php'; ?>