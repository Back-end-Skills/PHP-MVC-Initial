<?php
    // var_dump($this->dados);

    foreach($this->dados['cars'] as $car) {
        extract($car);

        // var_dump($;car);

        echo "ID: " .$Id. "<br/>";
        echo "MARCA: " .$marca. "<br/>";
        echo "MODELO: " .$modelo. "<br/>";
        echo "ANO: " .$ano. "<br/>";
        echo "<hr/>";

    }