<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je vraagt het en je vader zegt: "Het geheime recept is... Niks! Als je iets speciaals wilt maken moet je alleen geloven dat het speciaal is."</p>
        <p class="wijzer">Goed zo! je bent wijzer geworden.</p>
        <form class="form" action="keuzerecept.php" method="post">
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
