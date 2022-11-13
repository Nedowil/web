<html>
 <head>
  <title>Ejemplo PHP</title>
 </head>
 <body>
<h1>Ejemplo en PHP</h1>
 <?php echo '<p>Hola Mundo</p>'; ?>
 
 <?php $saludo = "Hola"; $despedida = "Adios"; ?> <p><?= $saludo ?></p> <p><?= $despedida ?></p>
 
 <?php $a = 5; if ($a == 5) { print "<p>$a es cinco</p>\n"; print "<p>¡Hasta otra!</p>\n"; } ?>
 
 <?php
$uno = [1, 2, 4];
$dos = [1, 3, 9];

$final = array_merge($uno, $dos);

print "<pre>\n"; print_r($final); print "</pre>\n";
?>

<?php
$numeros = [10, 20, 30, 40, 50, 60];

print "<p>Matriz inicial:</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";

shuffle($numeros);

print "<p>Matriz barajada con shuffle():</p>\n";
print "\n";
print "<pre>\n"; print_r($numeros); print "</pre>\n";
print "\n";
?>

 
 </body>
</html>