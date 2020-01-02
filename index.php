<?php
// Declaration des tableaux
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
// Texte associé aux personnes des tableaux
$victorBio = 'Victor Hugo, né le 26 février 1802 à Besançon et mort le 22 mai 1885 à Paris, est un poète lyrique, engagé ou épique selon les recueils ; romancier du peuple qui rencontre un grand succès avec Notre-Dame de Paris (1831), et plus encore avec Les Misérables (1862).';
$jeanLfBio = 'Jean de La Fontaine est un poète français né à Château-Thierry en 1621 et mort à Paris en 1695. Il est surtout connu pour être l\'auteur de ses très célèbres Fables.';
$pierreBio = 'Corneille est né à Rouen le 6 juin 1606 dans une famille bourgeoise. Il fait de brillantes études au collège des Jésuites de Rouen (de 1615 à 1622) et devient avocat en 1624.';
$jeanRBio = 'Célèbre poète, auteur de nombreuses tragédies durant la période classique, Jean Racine est connu dans le monde de l\'écriture grâce au succès de la pièce d\'Andromaque en 1667. Il décède à Paris le 21 avril 1699, à l\'âge de 59 ans.';
// Déclaration d'un tableau de tableaux
$portraits = [$portrait1, $portrait2, $portrait3, $portrait4];
?>
<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
  <title>Projet 3</title>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body class='container-fluid'>
  <?php foreach($portraits as $array){
    foreach($array as $key => $value){
      echo 'proot';
      // Still need to echo all value from all arrays in array
    }
  } ?>
  <div class="card mx-auto mb-3 w-50">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg" class="card-img" alt="Victor Hugo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Victor Hugo</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='assets/js/script.js'></script>
</body>
</html>
