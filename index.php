<?php
 // print_r($_FILES);


 $img='';
 $conf['passwprd']="labas";


  if (isset($_FILES['data'])){
      $to='C:/htdocs/while230120/uploads/'.$_FILES['data']['name'];
      move_uploaded_file($_FILES['data']['tmp_name'], $to);
      $file=fopen($to, 'r');
      $suma=0;
      $kiekis=0;
      while ($eilute=fgets($file)){
          $suma+=$eilute;
          $kiekis++;
      }
      fclose($file);
      echo "Pazimiu suma: $suma, Vidurkis ".($suma/$kiekis);
  }
  /*
   if (isset($_FILES['data'])){
      $to='C:/htdocs/while230120/uploads/'.rand(10000,99999).".txt";
      move_uploaded_file($_FILES['data']['tmp_name'], $to);
      $file=fopen($to, 'r');
      $suma=0;
      $kiekis=0;
      while ($eilute=fgets($file)){
          $suma+=$eilute;
          $kiekis++;
      }
      fclose($file);
      echo "Pazimiu suma: $suma, Vidurkis ".($suma/$kiekis);
  }
   */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($img!=''){ ?>
    <img src="<?=$img?>">
<?php } ?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="data"> <br>
    <button name="issiusti" value="1">Išsiusti</button>

</form>

</body>
</html>