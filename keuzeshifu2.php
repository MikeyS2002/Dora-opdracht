<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dora opdracht</title>
    <link rel="stylesheet" href="opmaak.css">
</head>

<body>

    <div class="dora">
        <p class="vraag">Je bent met Shifu aan het kletsen. Hij zegt dat je in jezelf moet geloven. Je moet zelf uitzoeken wie je bent en wat het betekend.</p>
        <form class="from" action="keuzeshifu2.php" method="post">
            <button type="submit" name="submit">Ga naar het begin</button>
        </form>
        <img src="shifu.png" width="30%" height="auto">
        <p class="copyright">Mike Schaper | Horizon College | PEITO19AO-A</p>
    </div>

    <?php 
        if (isset($_POST['submit'])) {
        header("Location: begin.php");
    }
    
    ?>
</body>

</html>
