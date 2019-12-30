<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je vader is heel zorgzaam en helpt je in bed. De volgende dag zeg je niet dat je gedroomt heb over noodles en hij verteld het geheime recept niet.</p>
        <form class="form" action="keuzenee.php" method="post">
            <button type="submit" name="submit">Ga naar het begin</button>
        </form>
        <img src="Mr._Ping.jpg" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
        if (isset($_POST['submit'])) {
        header("Location: begin.php");
    }
    
    ?>

</body>

</html>
