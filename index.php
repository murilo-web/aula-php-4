<?php
//array sem números repetidos
    $array = [];

    for ($i=0; $i <  5; $i++) { 
        $array[$i] = rand(1,5);

        while(inArrayCusntom($i,$array[$i], $array)){
            $array[$i] = rand(1,5);
        };
        
    }
    print_r($array);
    function inArrayCusntom($indice,$valor,$array){
        for ($i=0; $i < count($array) ; $i++) { 
            if($array[$i] == $valor && $i != $indice){
                echo 'repetiu<br>';
                return true;
            }
        }
        return false;
    }


?>