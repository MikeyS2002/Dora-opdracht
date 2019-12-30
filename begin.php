<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je bent de drakenkrijger, jij hebt de drakenkrijger testament gekregen van je meester. Maar er staat niks op. Je wilt wijzer worden, wat ga je nu doen</p>
        <p class="antwoorden">1. Ga je naar shifu en vraag je advies<br>2. Ga je naar je vader</p>
        <form class="form" action="begin.php" method="post">
            <select name="form">
                <option value="shifu">Shifu</option>
                <option value="vader">Vader</option>
            </select>
            <button type="submit" name="submit">Verzend</button>
        </form>
        <img src="panda.png" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>
    
    <?php 
    switch ($_POST['form']) {
        case "shifu":
            header("Location: keuzeshifu.php");
        break;
            
        case "vader":
            header("Location: keuzevader.php");
        break;
    }
    ?>

</body>

</html>
