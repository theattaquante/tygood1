<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nouveau modèle</title>
	<link rel="stylesheet" type="text/css" href="css/tygood.css">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>
<div class="bg"><body>
		<?php
	$erreurs = [];
	if( !empty($_POST) && (!$_POST['style'] || !$_POST['texte'] || !$_POST['taille'])){
		if(!$_POST['style'] ){
			$erreurs[] = 'Pas de style';
		}else{
			if ($_POST['style'] == 'option6' && !$_POST['texte']){
				$erreurs[] = 'Pas de précision pour le style';
			}
		}
		if(!$_POST['taille'] ){
			$erreurs[] = 'Pas de taille';
		}
	}
	
	if( !empty($_POST) && count($erreurs) == 0){
	/*pas d'erreurs, super, on fait quoi ?	*/
	}?>
<h2>Créer votre modèle personalisé</h2>
	<div class="container">
		<div><h4 class="image">1.Déposer votre image/photo<br></h4></div><img src="selfi.png" class="selfi"><div class="oppose-text"><h4>Déposer votre image/photo</h4>  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" id="image"><br>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $targetDir = "uploads/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Vérifier si le fichier est une image réelle ou une fausse image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      echo "Le fichier est une image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "Le fichier n'est pas une image.";
      $uploadOk = 0;
    }
  }

  // Vérifier si le fichier existe déjà
  if (file_exists($targetFile)) {
    echo "Désolé, le fichier existe déjà.";
    $uploadOk = 0;
  }

  // Vérifier la taille maximale du fichier
  $maxFileSize = 500000; // en octets
  if ($_FILES["image"]["size"] > $maxFileSize) {
    echo "Désolé, la taille du fichier est trop grande.";
    $uploadOk = 0;
  }

  // Autoriser certains formats de fichier
  $allowedFormats = array("jpg", "jpeg", "png", "gif");
  if (!in_array($imageFileType, $allowedFormats)) {
    echo "Désolé, seuls les fichiers JPG, JPEG et PNG sont autorisés.";
    $uploadOk = 0;
  }

  // Vérifier si $uploadOk est mis à 0 par une erreur
  if ($uploadOk == 0) {
    echo "Désolé, le fichier n'a pas été uploadé.";
  } else {
    // Tout est OK, uploader le fichier
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      echo "Le fichier " . basename($_FILES["image"]["name"]) . " a été uploadé.";
    } else {
      echo "Désolé, une erreur s'est produite lors de l'upload du fichier.";
    }
  }
}
?>
</div></div>
	<div class="container">
		<div><h4 class="style">2.Choisissez un style<br></h4></div><img src="style.png" class="style"><div class="oppose-text"><h4>Choisissez un style</h4>
<form novalidate method="POST">
	<select name="style" placeholder="style">
		<option value="option1" <?php if($_POST['style'] == 'option1'){ ?> selected <?php }?>>dessin animés</option>
		<option value="option2"<?php if($_POST['style'] == 'option2'){ ?> selected <?php }?>>cartoon</option>
		<option value="option3" <?php if($_POST['style'] == 'option3'){ ?> selected <?php }?>>zombie</option>
		<option value="option4" <?php if($_POST['style'] == 'option4'){ ?> selected <?php }?>>futuriste</option>
		<option value="option5" <?php if($_POST['style'] == 'option5'){ ?> selected <?php }?>>noir et blanc</option>
		<option value="option6" <?php if($_POST['style'] == 'option6'){ ?> selected <?php }?>>autre</option>
	</select><br>
	si autre: <br>
	<textarea rows="3" type="text" name="texte" class="autre" placeholder="veuillez utiliser un terme générique"><?=$_POST['texte']?></textarea>
		</div></div>
		<div class="container">
		<div><h4 class="taille">3.Définissez la taille de votre tableau</h4><p class="tableau">50cm*70cm<br>80cm*100cm<br>110cm*130cm</p><div class="oppose-text"><h4>Définissez la taille de votre tableau</h4>
			<select name="taille">
				<option>50cm*70cm</option>
				<option>80cm*100cm</option>
				<option>110cm*130cm</option>
			</select>
</div></div></div>
<?php if(count($erreurs)){?>
	<ul>
<?php foreach($erreurs as $erreur) {?>
	<li><?= $erreur ?></li>
	<?php } ?>
	</ul>
<?php } ?>
<input type="submit" name="prévisualisé" value="previsualisé" onclick="myFunction">

<script>
function myFunction() {
  <?php echo 'bouton clique' ?>('Bouton cliqué !');
</script>
</form>
</div>
</body>
</html>
