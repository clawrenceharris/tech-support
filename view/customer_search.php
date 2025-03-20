
<?php include 'header.php'; ?>

<main>
    <h2>Product List</h2>

    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead {
            background-color: #f2f2f2;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            border-bottom: 2px solid #ddd;
        }

       
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