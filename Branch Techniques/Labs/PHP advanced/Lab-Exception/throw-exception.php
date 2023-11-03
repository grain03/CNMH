<?php


class Validate{
    public function Validate_age($age){
        if ($age <= 16) {
            throw new Exception('You need to be 18 years old or older');
        }
        echo "Success";
    }
}


?>




