<!DOCTYPE html>
<html>
<head>
    <title>Panier de commande</title>
</head>
<body>
    <h1>Panier de commande</h1>

    <div id="panier">
        <!-- Ici s'afficheront les articles ajoutés au panier -->
    </div>

    <h2>Vérifier si un article est dans le panier</h2>
    <input type="text" id="id_article" placeholder="ID de l'article">
    <button onclick="verifierArticle()">Vérifier</button>
<script>// Fonction pour vérifier si un article est présent dans le panier
function articleDansLePanier($id_article) {
    if (isset($_SESSION['panier'][$id_article])) {
        return true;
    }
    return false;
}
</script>
    <script>
        // Fonction pour vérifier si un article est dans le panier en utilisant AJAX pour communiquer avec le backend (panier.php)
        function verifierArticle() {
            var id_article = document.getElementById('id_article').value;

            // Envoyer les données au backend en utilisant AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'panier.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Le backend a répondu avec succès, afficher le résultat
                    var result = JSON.parse(xhr.responseText);
                    var message = document.createElement('p');
                    if (result.article_present) {
                        message.textContent = 'L\'article est dans le panier.';
                    } else {
                        message.textContent = 'L\'article n\'est pas dans le panier.';
                    }
                    document.body.appendChild(message);
                }
            };
            xhr.send('action=verifier&id_article=' + id_article);
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
</html>
