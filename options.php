<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
<?php  include("head.php") ?>
</head>

<body>
    
<div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-secondary text-white">



<?php
        include("array.php"); 
        $res = false;
        /* Ici il compare si la donnée rentrée par l'utilisateur est la même que une des données de mon tableau. Si c'est le cas, $res prends la valeur vraie.*/
        foreach ($boissons as $boisson) {
             if ($_GET["boisson"] == $boisson) {
                 $res = true;
             }
            
        }
        /* Si on est dans le cas où la condition précédente n'est pas remplie, alors le $res prendra la valeur faux, et dans ce cas il retournera à la page index.php avec une error dans son URL pour qu'il affiche qu'il y a une erreur et qu'il faut réessayer*/
       if (!$res) {
           header("Location: index.php?error=true");
            exit();
        }
?>

    <p>Salut ! Et bienvenue sur la 2e étape de cette machine à boisson virtuelle, <?php echo($_SESSION['username']);
    ?></p><br>
    <p>Vous avez choisi un(e) : <?php print_r($_GET["boisson"]) ?> </p>
    <form class=p-5 method="GET" action="recap.php">
        <div class="mb-3">
            <label for="form_name" class="form-label">Choisir la dose de sucre :</label>
            <input name="sugar" min="0" max="5" type="number" class="form-control">
            <input name="boisson" type="hidden" value="<?php echo($_GET["boisson"])?>">
            <button type="submit" class="btn btn-dark">Valider</button>
        </div>
    </form>
</body>
</html>