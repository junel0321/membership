<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Payments</title>
</head>
<body>
<h2>Add Payment</h2>
<form action="add_payment.php" method="post">
    <label for="member_id">Member ID:</label>
    <input type="text" name="member_id" id="member_id" required><br><br>
    <label for="total_amount">Total Amount:</label>
    <input type="number" name="total_amount" id="total_amount" step="0.01" min="0" required><br><br>
    <input type="submit" value="Submit Payment">
</form>
<hr>
<h2>Payment Records</h2>
<?php include 'display_payments.php'; ?>
</body>
</html>
