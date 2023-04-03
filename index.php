<html lang="fr">
<head>
  	<title>Ajouter une adresse</title>
</head>

<?php

include('connect.php');

if (isset($_POST['address'])){
    $sql = "INSERT INTO `user`(`address`) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_POST['address']);
    $stmt->execute();
}
?>

<body>
<h2>Ajouter une ligne sur la base de donnée</h2>
<div class="form-group ">
<form method="post">

<input type="email" id="address" name="address">
<button type="submit" >Ajouter</button>

</form>
</div>
</body>
