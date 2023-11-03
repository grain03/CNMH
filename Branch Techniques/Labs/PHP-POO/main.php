
<html>
<body>
<?php 
include 'Affichage.php';
include 'Managment.php';

$objA = new Afficher_Stagiaire\Stagiaire();
$objB = new Gérer_Stagiaire\Stagiaire();

$result = $objA->sayHello();
echo $result;


echo "</br>";


echo $objB->sayHello();

?>

</body>
</html>
