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
    $login = false;
    $sql = "select Nom,Password from chef";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

          if(strtolower($row["Nom"])  == strtolower($nom) || $row["Password"] == $pass){
            echo "Logged In, $nom.";
            $login = true;
            header("Location: ../ReceptaCrear/index.php");
            break;
          }
        }

        if($login == false){echo "Login Incorrecte.";}

    }
    $conn->close();
}
?>

<body>
<a href="../Main/index.php" id="HomeBut">HOME</a>
    <div class="login-page">
        <div class="form" onsubmit="location.replace('../Main/index.html')">
          <form class="login-form" method="GET">
            <input type="text" name="nom" placeholder="username"/>
            <input type="password" name="contra" placeholder="password"/>
            <button type="submit">login</button>
            <p class="message">No account? <a href="Registres.php">Register</a></p>
          </form>
        </div>
      </div>
</body>
</html>