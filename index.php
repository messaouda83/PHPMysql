<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre première instruction : echo</title>
</head>

<body>
<h1>Transmettre les données avec les formulaire</h1>
<p>Veuilez taper votre prenom</p>
<form action="cible.php" method="post">

<input type="text" name="prenom" >
<br>
  <textarea name="message" id="" cols="30" rows="10">
  </textarea>
<input type="submit" value="Valider">

</form>
    <h2>Ma page web</h2>

        
        

    <ul>
        <li style="color:red;">Text en rouge</li>
        <li style="color:blue;">Text en bleu</li>
        <li style="color:green;">Text en vert</li>

    </ul>
    <p>
        Aujourd'hui nous sommes le:<br />
        <?php  echo date('d/m/y h:i:s'); 
//commentaire monoligne
               echo "<br>";
               echo "J'habite en France."; // Cette ligne indique où j'habite
               echo "<br>";
            // La ligne suivante indique mon âge
               echo "J'ai 39 ans.";
               echo "<br>";
//commentaire multiligne 
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
echo "J'ai 39 ans.";


            
            ?>
        </p>

</body>

</html>