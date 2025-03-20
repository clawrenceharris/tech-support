<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>SportsPro Technical Support</h1>
    <a href="../index.php">Home</a>
    <h2>Product List</h2>
    <table>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Version</th>
            <th>Release Date</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo htmlspecialchars($product['productCode']); ?></td>
            <td><?php echo htmlspecialchars($product['name']); ?></td>
            <td><?php echo htmlspecialchars($product['version']); ?></td>
            <td><?php echo htmlspecialchars($product['releaseDate']); ?></td>
            <td>
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_product">
                    <input type="hidden" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_product.php">Add Product</a>
</body>
</html>