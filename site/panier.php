<!DOCTYPE html>
<html>
<head>
    <title>Panier de commande</title>
</head>
<body>
    <h1>Panier de commande</h1>
<?php
session_start();

// Fonction pour ajouter un article au panier
function ajouterAuPanier($id_article, $nom_article, $prix_article) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Vérifie si l'article est déjà présent dans le panier
    if (array_key_exists($id_article, $_SESSION['panier'])) {
        $_SESSION['panier'][$id_article]['quantite']++;
    } else {
        $_SESSION['panier'][$id_article] = array(
            'nom' => $nom_article,
            'prix' => $prix_article,
            'quantite' => 1
        );
    }
}

// Fonction pour supprimer un article du panier
function supprimerDuPanier($id_article) {
    if (isset($_SESSION['panier'][$id_article])) {
        unset($_SESSION['panier'][$id_article]);
    }
}

// Fonction pour vider complètement le panier
function viderPanier() {
    $_SESSION['panier'] = array();
}
?>

    <div id="panier">
        <!-- Ici s'afficheront les articles ajoutés au panier -->
    </div>

    <button onclick="ajouterArticle()">Ajouter un article</button>
    <button onclick="viderPanier()">Vider le panier</button>

    <script>
        // Fonction pour ajouter un article au panier en utilisant AJAX pour communiquer avec le backend (panier.php)
        function ajouterArticle() {
            // Vous devez remplacer ces valeurs par celles de l'article que vous souhaitez ajouter
            var id_article = 1;
            var nom_article = 'Article 1';
            var prix_article = 10.99;

            // Envoyer les données au backend en utilisant AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'panier.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Le backend a répondu avec succès, mettre à jour le panier sur le frontend
                    var panier = JSON.parse(xhr.responseText);
                    afficherPanier(panier);
                }
            };
            xhr.send('action=ajouter&id_article=' + id_article + '&nom_article=' + nom_article + '&prix_article=' + prix_article);
        }

        // Fonction pour vider complètement le panier en utilisant AJAX pour communiquer avec le backend (panier.php)
        function viderPanier() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'panier.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Le backend a répondu avec succès, vider le panier sur le frontend
                    var panier = JSON.parse(xhr.responseText);
                    afficherPanier(panier);
                }
            };
            xhr.send('action=vider');
        }

        // Fonction pour afficher le contenu du panier sur le frontend
        function afficherPanier(panier) {
            var panierDiv = document.getElementById('panier');
            var html = '<h2>Panier</h2>';
            var total = 0;

            for (var id_article in panier) {
                if (panier.hasOwnProperty(id_article)) {
                    var article = panier[id_article];
                    html += '<p>' + article.nom + ' - Quantité : ' + article.quantite + ' - Prix unitaire : ' + article.prix + ' €</p>';
                    total += article.prix * article.quantite;
                }
            }

            html += '<p><strong>Total : ' + total + ' €</strong></p>';
            panierDiv.innerHTML = html;
        }
    </script>
</body>
<!--
   ________    ___
   /\/\/\/\   | "o\
 <|\/\/\/\/|_/ /__/
  |___________/
  |_|_|  /_/_/
-->
</html>
