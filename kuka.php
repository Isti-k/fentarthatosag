<?php
    include_once "backend.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus1.css">
    <title>Szelektív hulladéknyűjtés</title>
</head>
<body>
    <?php
    $szemet=array("papír","bab konzerv", "tejes doboz", "sörös üveg", "nylon csomagolás", "krumpli héja", "elem");
    ?>
    <form action="backend.php" method="post">
        <label for="szemetem">kidobandó szemét</label>
        <select name="szemetem" id="szemetem">
            <?php
            foreach($szemet as $ertek){
                echo "<option value='$ertek'>$ertek</option>";
            }
            ?>
        </select>
        <br>
        <input type="image" src="kuka.jpg" alt="kuka" name="kuka">
        <br>
    </form>
    <a href="index.php">Főoldal</a>
    <br>
    <a href="vizVedelme.php">Víz védelme</a>
</body>
</html>