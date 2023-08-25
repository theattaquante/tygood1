<?php
if (isset($_POST['submit'])) {
// Établir une connexion à la base de données
$username = "pauluser";
$password = "lapinour5";
$dbname = "paul";

$conn = new mysqli('localhost', $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Données à insérer
$id_article = "1";
$nom_article = "tableau";
$quantite = 1;

// Préparer la requête SQL
$sql = "INSERT INTO produit (id, name, quantite) VALUES ('$id_article', '$nom_article', $quantite)";

// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Données insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données : " . $conn->error;
}

// Fermer la connexion
$conn->close();
echo ("$id_article $nom_article $quantite");
}
?>
