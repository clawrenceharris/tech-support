
<?php include 'header.php'; ?>

<main>
    <h1>SportsPro Technical Support</h1>
    <p>Sports management software for the sports enthusiast</p>
    <a href="../index.php">Home</a>

    <h2>View/Update Customer</h2>

    <?php if (isset($customer)) : ?>
    <form action="../customer_manager/index.php" method="post">
        <input type="hidden" name="action" value="update_customer">
        <input type="hidden" name="customer_id" value="<?php echo $customer['customerID']; ?>">

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"
            value="<?php echo htmlspecialchars($customer['firstName']); ?>"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"
            value="<?php echo htmlspecialchars($customer['lastName']); ?>"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"
            value="<?php echo htmlspecialchars($customer['address']); ?>"><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($customer['city']); ?>"><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($customer['state']); ?>"><br>

        <label for="postal_code">Postal Code:</label>
        <input type="text" id="postal_code" name="postal_code"
            value="<?php echo htmlspecialchars($customer['postalCode']); ?>"><br>

            <label for="country_code">Country:</label>
            <select id="country_code" name="country_code">
                <?php foreach ($countries as $country) : ?>
                    <option value="<?php echo $country['countryCode']; ?>" <?php if ($country['countryCode'] == $customer['countryCode']) echo 'selected'; ?>>
                        <?php echo $country['countryName']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($customer['phone']); ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($customer['email']); ?>"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"
            value="<?php echo htmlspecialchars($customer['password']); ?>"><br>

        <input type="submit" value="Update Customer">
    </form>
    <?php else : ?>
    <p>No customer found.</p>
    <?php endif; ?>

    <br>
    <a href="../customer_manager/index.php?action=show_search_form">Search Customers</a>

</main>

<?php include 'footer.php'; ?>
