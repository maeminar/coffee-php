<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

</html>

<head>
<?php include("head.php") ?>
</head>

<body >
    <div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-secondary text-white">
    <p>Salut ! Et bienvenue sur cette machine à boisson virtuelle !</p>
    <p>Veuillez choisir votre boissons parmis la liste suivante : </p>

   
    <?php
    include("array.php");
    /* affichage du tableau qui prends en compte les valeurs changeantes*/
    foreach ($boissons as $key) {
        ?>
        <p>
        <?php echo ($key); ?> 
        </p>
        <?php
    }
    ?>

    <form method="GET" action="options.php">
        <div class="mb-3">
            <label for="inputName" class="form-label">Entrez votre choix de boisson :</label>
            <input class="form-control" name="boisson" type="text"><br>
            <button type=" submit" class="btn btn-dark">Valider</button>
        </div>
    </form>

    <div>
    <?php
    /* Si l'utilisateur rentre une valeur qui n'est pas dans le tableau $boisson, alors la page option.php va la vérifier et nous renvoier à l'index.php mais avec un paramètre "error" dans son URL. Ce qui fait que cette condition s'appliquera. */
    if (isset($_GET["error"])) {
        echo '<div class="alert alert-danger" role="alert">';
        echo "Vous n'avez pas sélectionné la bonne boisson. Essayez encore !";
        echo '</div>';
    }
        ?>
        </div>
        </div>
</body>
</html>