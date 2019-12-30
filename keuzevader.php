<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je bent aan het kletsen met je vader. Hij vraagt of je lekker de slapen hebt. Wat antwoord je?</p>
        <p class="antwoorden">1. Ja, ik heb gedroomd over noedels<br>2. Nee, ik kon niet slapen, omdat ik niet weet wat de drakenkrijer testament betekend</p>
        <form class="form" action="keuzevader.php" method="post">
            <select name="form">
                <option value="ja">ja</option>
                <option value="nee">nee</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="Mr._Ping.jpg" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
    switch ($_POST['form']) {
        case "ja":
            header("Location: keuzeja.php");
        break;
            
        case "nee":
            header("Location: keuzenee.php");
        break;
    }
    ?>

</body>

</html>
