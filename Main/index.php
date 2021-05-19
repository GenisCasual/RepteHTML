<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../jQuery/jQuery.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <title>Receptes</title>
</head>

<?php 
    include('../connexio.php');

    $sql = "SELECT * FROM recepta";

    $result = $conn->query($sql);
    /*
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo "id: " .$row["id"]. " - Name: " .$row["nom"] . " - Preu: " .$row["preu"]. "<br>";
            echo "id: ".$row["idRecepta"]. " - Nom Recepta: ".$row["NomRecepta"]. " - Descripcio: " .$row["Descripcio"]. " - Preparació: ".$row["Preparacio"]. "- IdChef: ".$row["IdChef"]. "- IdIngredients: ".$row["IdIngredients"];
        }
    }
    else{
        echo "0 results!";
    }
*/

?>

<body>
  <nav>
  <div id="main">
    <div id='mmeennuu' onclick="menu()">
    <label class='menu' for='mmeennuu'>
    <div class='barry'>
      <span class='bar'></span>
      <span class='bar'></span>
      <span class='bar'></span>
      <span class='bar'></span>
    </div>
      
    <ul>
      <li><a onclick="llisca('#Home');">Home</a></li>
      <li><a onclick="llisca('#About');">About</a></li>
      <li><a onclick="llisca('#Contact');">Contact</a></li>
      <li><a onclick="llisca('#Other');">Other</a></li>
    </ul>
  </label>
  </div>
  </div>
</nav>
<section id="Home">
  <div class="wrapp">
    <h2>Arros amb bolets</h2>
    <p>Recepta sdnfkdlsfndksf dksfndslk fdnks lfnds knfdsl fdnksl fdnsklf dskllkas.</p>
      <?php    /*     
        if($result = mysqli_query($conn,$sql)){
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              echo "<p> " .$row["NomRecepta"]." </p>";
            }
          }
        }

        $conn->close();*/
      ?>
  </div>
</section>
<section id="About">
  <div class="wrapp">
    <h1>About</h1>
    <p> A lot of text. </p>
  </div>
</section>
<section id="Contact">
  <div class="wrapp">
    <article>
      <h1>Contact</h1>
      <p id="paragraf"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Fusce venenatis sapien ligula, eget aliquam nunc euismod et. 
        Nunc massa mauris, porta et leo sed, laoreet rhoncus neque. 
        Sed iaculis, metus vel luctus mattis, dolor massa porttitor tortor, sed commodo odio massa sit amet libero. 
        Maecenas felis dolor, aliquet et vestibulum quis, pretium id dolor. 
        Vestibulum vel mauris non enim imperdiet laoreet. 
        Nam venenatis, massa sed faucibus luctus, nisl mi pharetra nunc, eget dignissim ligula ante at leo. 
      </p>
      </article>
  </div>
</section>
<section id="Other">
  <div class="wrapp">
    <h1>Other</h1>
  </div>
</section>
</body>
</html>