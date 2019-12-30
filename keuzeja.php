<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdraccht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">"O heb je de noedel droom gehad? Dan is het wel tijd dat je het geheime recept weet! En wil je wat noedels serveren?" Zegt je vader.</p>
        <p class="antwoorden">1. Wil je eerst het geheime recept weten<br>2. Je serveert de noedels eerst</p>
        <form class="form" action="keuzeja.php" method="post">
            <select name="form">
                <option value="recept">Recept</option>
                <option value="serveren">Serveren</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="Mr._Ping.jpg" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
    switch ($_POST['form']) {
        case "recept":
            header("Location: keuzerecept.php");
        break;
            
        case "serveren":
            header("Location: keuzeserveren.php");
        break;
    }
    ?>

</body>

</html>
