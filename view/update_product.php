<?php include 'header.php'; ?>


<main>
    <h2>Update Product</h2>

    <form action="." method="post">
        <input type="hidden" name="action" value="update_product">
        <input type="hidden" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>">

        <label>Product Code:</label>
        <input type="text" name="productCode" value="<?php echo htmlspecialchars($product['productCode']); ?>" readonly>
        <br>

        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>">
        <br>

        <label>Version:</label>
        <input type="text" name="version" value="<?php echo htmlspecialchars($product['version']); ?>">
        <br>

        <label for="releaseDate">Release Date:</label>
        <input 
        value = <?php
                $date = new DateTime($product['releaseDate']);
                echo $date->format('m/d/Y'); 
            ?>
            type="text" 
            name="releaseDate" 
            id="releaseDate">
        <br>


        <button type="submit">Update Product</button>
    </form>

    <p><a href=".?action=list_products">View Product List</a></p>
</main>
<?php include 'footer.php'; ?>
