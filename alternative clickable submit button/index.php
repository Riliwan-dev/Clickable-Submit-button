<?php
include('php-validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="text" name="text" id="text" placeholder="username">
        <input type="number" name="number" id="number" placeholder="number" min="2" max="5" required>
        <input type="tel" name="tel" id="tel" placeholder="telephone"required >
        <input type="date" name="date" id="date" required>
        <button type="submit" name="submit" id="submit" disabled>submit</button>
    </form>
    
</body>
<script src="script.js"></script>
</html>