<?php

$result = '';

if (isset($_POST['number']) && is_numeric($_POST['number'])) {
    $result = $_POST['number'] * $_POST['number'];
}
?>

<html>
<head>
    <title>Class_work</title>
</head>
<body>
<form method="post">
    <label>Ka pakelti kvadratu</label>
    <input type="number" name="number">
    <button> Submit</button>
</form>
<h2>Arsakymas: <?=$result?></h2>
</body>
</html>
