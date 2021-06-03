<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $toRemove = $_GET['toRemove'];
  $sub = '***';
  $testo = "Sopra la panca la capra campa, sotto la panca la capra crepa."
  ?>
  <h1>Parola da rimuovere : <?php echo $toRemove  ?></h1>
  <h1>Testo originale: <?php echo $testo . ' Lunghezza testo: '.strlen($testo) ?></h1>
  <h1>Removed:  <?php echo str_replace($toRemove,$sub,$testo) . ' Lunghezza testo: ' . strlen(str_replace($toRemove,$sub,$testo)) ?></h1>
  
</body>
</html>