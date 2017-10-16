<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>


<body>
    
    
<form method="POST" action="#">
    <h1>Bienvenue sur notre site, inscrivez vous</h1>
    <br>
    <label for="log">Login</label>
    <input type="text" name="log"/>
    </br>
    <label for="pass">Password</label>
    <input type="password" name="pass"/>
    <input type="submit" name="valider" value="Submit"/>
    
</form>
    <br>
</body>
</html>

<?php
if(isset($_POST['log']) && ($_POST['pass'])) {
        $log = $_POST['log'];
        $pass = $_POST['pass'];
$sql = "INSERT INTO `user`(`id`, `login`, `mdp`, `email`, `remember`, `avatar`) VALUES ('','$log','$pass','','','')";
$query = $pdo->prepare($sql);
$query->execute(); 
}

?>