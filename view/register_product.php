<?php include 'header.php'; ?>
<main>
    <h1>Register Product</h1>
    <p>Customer: <?php echo htmlspecialchars($customer['firstName'] . ' ' . $customer['lastName']); ?></p>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['customerEmail']); ?></p> <form action="." method="post">
        <input type="hidden" name="action" value="register_product">
        <label>Product:</label>
        <select name="productCode">
            <?php foreach ($products as $product) : ?>
                <option value="<?php echo $product['productCode']; ?>">
                    <?php echo htmlspecialchars($product['name']); ?>
                </option>
            <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Register Product">
    </form>
    <form action="." method="get">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>
</main>
<?php include 'footer.php'; ?>