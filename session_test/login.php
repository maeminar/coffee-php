<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<?php include("../head.php") ?>
</head>

<body>
<div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-secondary text-white">
<form method="POST" action="login.php">
    <div class="form-group row">
<label for="username">Identifiant :</label>
    <div class="col-sm-10">
<input type="text" name="username" id="username">
    </div>
    </div>
    <div class="form-group row">
<label  for="password">Mot de passe :</label>
    <div class="col-sm-10">
<input type="password" name="password" id="password">
    <div class="col-sm-10">
<input type="submit" value="se connecter">
</div>
</div>
</form>

<?php
$username_valide = "Sarah";
$password_valide = "mdp";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['username'] === $username_valide && $_POST['password'] === $password_valide) {
        $_SESSION['username'] = $username_valide;
        $_SESSION['password'] = $password_valide;
        echo("Bravo $_POST[username] ! Vous êtes connectée.");?>
        <a href="session.php">Poursuivre ma visite.</a>
    <?php
    }
    else {
        echo '<div class="alert alert-danger" role="alert">';
        echo("Vous vous êtes trompés. Veuillez réessayer.");
        echo '</div>';
    }
}
?>

</body>
</html>