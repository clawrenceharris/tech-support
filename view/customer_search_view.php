<!DOCTYPE html>
<html>
<head>
    <title>Customer Search</title>
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
</head>
<body>
    <h1>SportsPro Technical Support</h1>
    <p>Sports management software for the sports enthusiast</p>
    <a href="#">Home</a>

    <h2>Customer Search</h2>
    <form method="get" action="index.php">
        <input type="hidden" name="action" value="search_customers">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name">
        <button type="submit">Search</button>
    </form>

    <?php if (isset($customers)) : ?>
        <?php if ($customers) : ?>
            <h2>Results</h2>
            <table>
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
                                <button type="submit">Select</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else : ?>
            <p>No customers found with the last name '<?php echo htmlspecialchars($last_name); ?>'.</p>
        <?php endif; ?>
    <?php endif; ?>

    <p>&copy; 2022 SportsPro, Inc.</p>
</body>
</html>