<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/tygood.css">
	<title>produit test</title>
</head>
<body>

	<div class="bg">
		<div class="recherche-et-suggestion">
			<select id="scroll-list">
	        <!-- Les options seront ajoutées dynamiquement en utilisant JS -->
	    </select>

	    <script src="js/scroll-list.js"> </script> <input type="text" placeholder="rechercher" class="recherche">
	    <input type="submit"> </div>

			<div class="produit_test">

				<div class="nom-produit-et-description"> <div class="image-produit"> <img src="tygoodlogo.png"></div> <h1> tableau métalique aimanté </h1> <p> la description du produit </p> 
				<button onclick="ajouterAuPanier({id:1.1,prix: 35.91, quantite: 1 })"> Ajouter au panier </button> 
				</div>

					<script type="text/javascript">
					  var panier=[]
					  function ajouterAuPanier(produit) {
					    let existProduct = panier.find(product=>product.id === produit.id)
					    if (existProduct) {
					      panier = panier.map(product=>{
					        if (product.id === produit.id){
					          product.quantite ++
					        }
					        return product
					      })
					    }
					    else {
					      panier.push(produit);
					    }
					    console.log(panier)
					  }
					</script>

			</div>

<div class="commentaires-et-avis">
	<h1>commentaires</h1>
		<div class="block-comm">jhgftgd</div>
</div>

	</div>

</body>
<!--
   ________    ___
   /\/\/\/\   | "o\
 <|\/\/\/\/|_/ /__/
  |___________/
  |_|_|  /_/_/
-->
</html>