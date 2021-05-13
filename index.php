<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM-HI</title>
</head>
<body>
<?php 

    include('connexio.php');

    $sql = "SELECT * FROM recepta";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo "id: " .$row["id"]. " - Name: " .$row["nom"] . " - Preu: " .$row["preu"]. "<br>";
            echo "id: ".$row["idRecepta"]. " - Nom Recepta: ".$row["NomRecepta"]. " - Descripcio: " .$row["Descripcio"]. " - Preparació: ".$row["Preparacio"]. "- IdChef: ".$row["IdChef"]. "- IdIngredients: ".$row["IdIngredients"];
        }
    }
    else{
        echo "0 results!";
    }

    $conn->close();
?>

<a href="Logins/Logins.html">Log In</a>

</body>
</html>