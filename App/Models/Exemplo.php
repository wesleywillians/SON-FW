<?php

namespace App\Models;

class Exemplo {

    public function somar($x, $y) {
        if (is_numeric($x) and is_numeric($y))
            return $x + $y;
        else
            throw new \Exception('Nao é numerico');
    }

}