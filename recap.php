<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("head.php") ?>
</head>

<body>
<div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-secondary text-white">
    <h2>Voici votre commande :</h2>  <br> <p><?php echo($_GET["boisson"])?> avec <?php echo $_GET["sugar"]?> sucre(s).</p>
   <br>
<a href="index.php">Commande annulée</a>
</body>
</html>


