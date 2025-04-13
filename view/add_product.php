<?php
include("header.php")
?>

<main>
    <h1>SportsPro Technical Support</h1>
    <a href="../index.php">Home</a>
    <h2>Add Product</h2>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_product">

        <label for="productCode">Product Code:</label>
        <input type="text" name="productCode" id="productCode"><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="version">Version:</label>
        <input type="text" name="version" id="version"><br><br>

        <label for="releaseDate">Release Date:</label>
        <input type="text" name="releaseDate" id="releaseDate"><br><br>
       
        <button type="submit">Add Product</button>
    </form>
</main>
<?php
include("footer.php")
?>