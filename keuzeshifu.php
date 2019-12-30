<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je bent bij Shifu. Je begint met hem te kletsen.</p>
        <p class="antwoorden">1. Je praat veder met Shifu<br>2. Je gaat naar je meester</p>
        <form class="form" action="keuzeshifu.php" method="post">
            <select name="form">
                <option value="shifu2">Shifu</option>
                <option value="meester">Meester</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="shifu.png" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
    switch ($_POST['form']) {
        case "shifu2":
            header("Location: keuzeshifu2.php");
        break;
            
        case "meester":
            header("Location: keuzemeester.php");
        break;
    }
    ?>
</body>

</html>
