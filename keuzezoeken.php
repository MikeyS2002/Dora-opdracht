<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je zoekt hem maar kan hem niet vinden. Jullie zijn elkaar net ontlopen. Luister naar je shifu.</p>
        <form class="form" action="keuzezoeken.php" method="post">
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
