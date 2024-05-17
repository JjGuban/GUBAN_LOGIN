<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <?php
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = array(
        'Fishball' => 30,
        'Kikiam' => 40,
        'Corndog' => 50
    );

    $total_cost = $prices[$item] * $quantity;
    $change = $cash - $total_cost;

    echo "<h2>Your Order is $item, and the quantity is $quantity</h2>";
    echo "<h2>The Total Cost is: $total_cost pesos</h2>";
    echo "<h2>The Money we received: $cash pesos</h2>";
    echo "<h2>Your Change is: $change pesos</h2>";
    echo "<h2>Thank you for ordering, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
    ?>
</body>
</html>
