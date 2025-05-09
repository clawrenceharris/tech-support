<?php include 'header.php'; ?>

<main>
    <h2>Product List</h2>

    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Version</th>
                <th>Release Date</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) : ?>
    <tr>
        <td><?php echo htmlspecialchars($product['productCode']); ?></td>
        <td><?php echo htmlspecialchars($product['name']); ?></td>
        <td><?php echo htmlspecialchars($product['version']); ?></td>
        <td>
            <?php
            $date = new DateTime($product['releaseDate']);
            echo $date->format('n-j-Y'); 
            ?>
        </td>
        <td>
            <form action="." method="post">
                <input type="hidden" name="action" value="delete_product">
                <input type="hidden" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>">
                <button type="submit">Delete</button>
               

            </form>
            <form action="." method="post">

            <input type="hidden" name="action" value="show_update_form">
                <input type="hidden" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>">
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href=".?action=show_add_form">Add Product</a>
</main>

<?php include 'footer.php'; ?>