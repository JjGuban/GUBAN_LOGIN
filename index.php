<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER MANAGEMENT SYSTEM</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    
    <h1>Welcome to the Canteen!</h1>
    <h2>Below are the prices:</h2>
    <ul>
        <li>Fishball - 30 pesos</li>
        <li>Kikiam - 40 pesos</li>
        <li>Corndog - 50 pesos</li>
    </ul>
    
    <form method="post" action="items.php">
        <label for="item">Choose your order:</label>
        <select name="item" id="item">
            <option value="Fishball">Fishball</option>
            <option value="Kikiam">Kikiam</option>
            <option value="Corndog">Corndog</option>
        </select><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        
        <label for="cash">Cash:</label>
        <input type="number" name="cash" id="cash" required><br><br>
        
        <input type="submit" value="Submit">
    <br><br>
        <a href="logout.php">Logout</a>
    </form>
</body>
</html>
