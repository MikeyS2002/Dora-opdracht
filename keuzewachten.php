<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je meester is aangekomen bij de boom. En neemt ook een lekker perzikje. Jullie beginnen te praten. Wat vraag je?</p>
        <p class="antwoorden">1. Je vraagt waarom jij dit moet doen<br>2. Je vraagt wanneer jij moet weten wat die scroll betekend</p>
        <form class="form" action="keuzewachten.php" method="post">
            <select name="form">
                <option value="waarom">Waarom</option>
                <option value="wanneer">Wannneer</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="oogway1.png" width="50%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
    switch ($_POST['form']) {
        case "waarom":
            header("Location: keuzewaarom.php");
        break;
            
        case "wanneer":
            header("Location: keuzewanneer.php");
        break;
    }
    ?>
</body>

</html>
