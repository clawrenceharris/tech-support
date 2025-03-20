
<?php include 'header.php'; ?>

<main>
    <h2>Product List</h2>

    <style>
       <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
       
    </style>

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
                    <td><?php echo htmlspecialchars($product['releaseDate']); ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_product">
                            <input type="hidden" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>">
                            <button type="submit" class="button-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href=".?action=show_add_form">Add Product</a>
</main>

<?php include 'footer.php'; ?>