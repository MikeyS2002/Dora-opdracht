<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je shifu zei dat je hem kom vinden bij de perzikenboom boven op de berg. Je bent er maar ziet hem niet. Wat ga je doen?</p>
        <p class="antwoorden">1. Je wacht en neemt een lekker perzikje<br>2. Je gaat je meester zoeken</p>
        <form class="form" action="keuzemeester.php" method="post">
            <select name="form">
                <option value="zoeken">Zoeken</option>
                <option value="wachten">Wachten</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="oogway1.png" width="50%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
    switch ($_POST['form']) {
        case "zoeken":
            header("Location: keuzezoeken.php");
        break;
            
        case "wachten":
            header("Location: keuzewachten.php");
        break;
    }
    ?>
</body>

</html>
