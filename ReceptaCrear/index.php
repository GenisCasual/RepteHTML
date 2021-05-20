<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php

include('../connexio.php');

if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
    $desc = $_GET["desc"];

    $sql = "insert into receptes (NomRecepta,Descripcio) VALUES ('$nom','$desc')";
    $result = $conn->query($sql);
    if ($result) {
        echo "ARA SI QUE VA. MUAHAHAHAHA!";
    } else {
        echo "0 results!";
    }
    $conn->close();
}
?>

<body>
<a href="../Main/index.php" id="HomeBut">HOME</a>
<section id="About">
  <div class="wrapp">
    <h1>Nova Recepta</h1>
    <div class="login-page">
        <div class="form">
            <form class="register" method="GET">
                <input type="text" name="nom" placeholder="Nom Recepta" />
                <input type="text" name="desc" placeholder="Descripcio" id="textRec"/>
                <button type="submit">Afegir Recepta</button>
            </form>
        </div>
    </div>
  </div>
</section>
</body>
</html>