<?php



include("./throw-exception.php");

try {
    $age = new Validate();
    echo $age->Validate_age(8);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>




