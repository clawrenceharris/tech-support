


<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'view/header.php'; 

require_once('model/database.php');

?>


<main>
    <nav>
        
    <h2>Administrators</h2>
    <ul>
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="under_construction.php">Manage Technicians</a></li>
        <li><a href="customer_manager">Manage Customers</a></li>
        <li><a href="under_construction.php">Create Incident</a></li>
        <li><a href="under_construction.php">Assign Incident</a></li>
        <li><a href="under_construction.php">Display Incidents</a></li> 
    </ul>

    <h2>Technicians</h2>    
    <ul>
        <li><a href="under_construction.php">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul>
        <li><a href="register_product">Register Product</a></li>
    </ul>
    
    </nav>
</section>
<?php include 'view/footer.php'; ?>