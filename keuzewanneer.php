<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je vraagt het en je meester zegt: "Je bent teveel bezig met wat was en wat zal komen. Er luid een gezegde, 'Vandaag is geweest, morgen wordt gevreest, maar vandaag wordt je gegeven. Neem het ervan en pluk de dag!'"</p>
        <p class="wijzer">Goed zo! Je bent wijzer geworden.</p>
        <form class="form" action="keuzewanneer.php" method="post">
            <button type="submit" name="submit">Ga naar het begin</button>
        </form>
        <img src="oogway1.png" width="50%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
        if (isset($_POST['submit'])) {
        header("Location: begin.php");
    }
    
    ?>
</body>

</html>
