<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGINS</title>
</head>

<?php

include('connexio.php');
if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
    $pass = $_GET["contra"];
    $mail = $_GET["mail"];
    $sql = "insert into chef (Nom,Password,Email) VALUES ('$nom','$pass','$mail')";
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
    <div class="login-page">
        <div class="form">
            <form class="register" method="GET">
                <input type="text" name="nom" placeholder="name" />
                <input type="password" name="contra" placeholder="password" />
                <input type="text" name="mail" placeholder="email address" />
                <button type="submit">create</button>
                <p class="message">Already registered? <a href="Logins.php">Sign In</a></p>
            </form>
        </div>
    </div>
</body>

</html>