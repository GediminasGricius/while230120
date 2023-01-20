<?php
$file=fopen('../index.php', 'r');
while ($eilute=fgets($file)){
    echo $eilute." <br>";
}
fclose($file);
?>