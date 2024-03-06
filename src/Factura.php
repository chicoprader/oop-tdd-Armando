<?php

namespace App;

/*
 * Ejercicio
 * Implementar la clase Factura para que funcione el código de ejemplo
 * Al imprimir el objeto debe de imprimir un JSON
 * Considera usar tus mejores prácticas
 */

class Factura
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function __toString()
    {
        return json_encode(['factura' => $this->numero]);
    }
}
