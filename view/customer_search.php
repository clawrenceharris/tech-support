
<?php include 'header.php'; ?>


<main>
    <h2>Customer Search</h2>
    <form action="index.php" method="get">
        <input type="hidden" name="action" value="search_customers">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name">
        <input type="submit" value="Search">
    </form>

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    <?php if (isset($customers)) : ?>
        <h2>Results</h2>
        <table>
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
>>>>>>> new-branch
>>>>>>> Stashed changes
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($customer['firstName'] . ' ' . $customer['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($customer['email']); ?></td>
                    <td><?php echo htmlspecialchars($customer['city']); ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="view_update_customer">
                            <input type="hidden" name="customer_id" value="<?php echo $customer['customerID']; ?>">
                            <input type="submit" value="Select">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
<<<<<<< Updated upstream
    <?php ?>
=======
<<<<<<< HEAD
    <?php endif; ?>
=======
    <?php ?>
>>>>>>> new-branch
>>>>>>> Stashed changes
 </main>
<?php include 'footer.php'; ?>
