<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>nos collections </title>
	<link rel="stylesheet" type="text/css" href="css/tygood.css">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/splide.min.css">
</head>
<body class="h1">
  <div class="cart"><a href="panier.php"><img src="panier.jpg" class="panier"></a><br>votre panier  </div>
	<div class="center">
	<div class="bg">
<h1>Collections</h1>
<p>Des tableaux originaux pour instoré une ambiance calme et relaxante</p>
<section class="splide" aria-label="Splide Basic HTML Example">
<h4>Collection limité</h4>
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">   
         <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.99</p>
        <button class="bouton" onclick="ajouterAuPanier({id:9,prix: 35.99, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.98</p>
        <button class="bouton" onclick="ajouterAuPanier({id:8,prix: 35.98, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.97</p>
        <button class="bouton" onclick="ajouterAuPanier({id:7,prix: 35.97, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
  <li class="splide__slide">
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.96</p>
        <button class="bouton" onclick="ajouterAuPanier({id:96,prix: 35.96, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">    
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.95</p>
        <button class="bouton" onclick="ajouterAuPanier({id:5,prix: 35.95, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.94</p>
        <button class="bouton" onclick="ajouterAuPanier({id:4,prix: 35.94, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
  <li class="splide__slide">
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.93</p>
       <button class="bouton" onclick="ajouterAuPanier({id:3,prix: 35.93, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">    
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.92</p>
       <button class="bouton" onclick="ajouterAuPanier({id:2,prix: 35.92, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
      <li class="splide__slide">    
        <div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.91</p>
         <button class="bouton" onclick="ajouterAuPanier({id:1,prix: 35.91, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
    </ul>
  </div>
</section>

<section>
<p>du texte</p></section>

<script src="js/splide.min.js"></script>

<h4>Collection persistante</h4>


<section class="splide2 splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track"><?
    $requete = "SELECT * FROM produit;";
    $username = "pauluser";
    $password = "lapinour5";
    $dbname = "paul";

    $conn = new mysqli('localhost', $username, $password, $dbname);
    $produits = $conn->query($requete);?>
		<ul class="splide__list"><?
      foreach ($produits as $produit){?>
      <li class="splide__slide">    
        <div class="fiche-produit">
          <img id="image-produit" src="favicon.ico" alt="Image du produit">
          <p id="description-produit"><?=$produit["nom"];?></p>
          <p id="prix-produit"><?=$produit["prix"];?></p>
          <button class="bouton" onclick="ajouterAuPanier({id:<?=$produit["id"];?>,prix: <?=$produit["prix"];?>, quantite: 1 })">Ajouter au panier</button>
        </div>
      </li><?
      }?>

			<li class="splide__slide">    
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.99</p>
        <button class="bouton" onclick="ajouterAuPanier({id:9.1,prix: 35.99, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
			<li class="splide__slide">
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.98</p>
        <button class="bouton" onclick="ajouterAuPanier({id:8.1,prix: 35.98, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
			<li class="splide__slide">
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.97</p>
        <button class="bouton" onclick="ajouterAuPanier({id:7.1,prix: 35.97, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
	<li class="splide__slide">
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.96</p>
        <button class="bouton" onclick="ajouterAuPanier({id:6.1,prix: 35.96, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
			<li class="splide__slide">    
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.95</p>
        <button class="bouton" onclick="ajouterAuPanier({id:5.1,prix: 35.95, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
			<li class="splide__slide">
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.94</p>
        <button class="bouton" onclick="ajouterAuPanier({id:4.1,prix: 35.94, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
	<li class="splide__slide">
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.93</p>
       <button class="bouton" onclick="ajouterAuPanier({id:3.1,prix: 35.93, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
			<li class="splide__slide">    
				<div class="fiche-produit">
        <img id="image-produit" src="favicon.ico" alt="Image du produit">
        <p id="description-produit">tableau métalique aimanté</p>
        <p id="prix-produit">35.92</p>
       <button class="bouton" onclick="ajouterAuPanier({id:2.1,prix: 35.92, quantite: 1 })">Ajouter au panier</button>
    </div>
  </li>
	<li class="splide__slide"> 
      <form action="php/article.php" method="POST">   
				<div class="fiche-produit">
          <img id="image-produit" src="favicon.ico" alt="Image du produit">
          <p id="description-produit">tableau métalique aimanté</p>
          <p id="prix-produit">35.91</p>
           <button type="submit" name="submit" onclick="ajouterAuPanier({id_article:2.1,nom_article: , quantite: 1 })"> lancer le script</button>
        </div>
      </form>
  </li>
</ul>
  </div>
</section>
<p>Vous pouvez toujours créer votre tableau ici : <a class="modele" href="/nouveaumodèle.php">Créer un modèle</a></p>
</div>
</div>
<script type="text/javascript">
  var panier=[]
  function ajouterAuPanier(produit) {
    let existProduct = panier.find(product=>product.id===produit.id)
    if (existProduct) {
      panier = panier.map(product=>{
        if (product.id===produit.id){
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

var splide = new Splide( '.splide', {
  type   : 'loop',
  perPage: 3,
  perMove: 1,
  autoplay: true,
  pagination: false
} );

splide.mount();
//splide.play();
</script>

<script type="text/javascript">
var splide2 = new Splide( '.splide2', {
  type   : 'loop',
  perPage: 3,
  perMove: 1,
  autoplay: true,
  pagination: false
} );

splide2.mount();
//splide.play();
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