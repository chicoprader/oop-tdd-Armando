<?php

namespace App;

/*
 * Ejercicio
 * Implementar clase Recibo para que funcione el código de ejemplo
 * Agregar el I.V.A al costo final al 16%
 * Considera usar tus mejores prácticas
 */
/**
 * Class Recibo
 *
 * @package App
 */
class Recibo {

    const IVA = 1.16;
    public array $items = [];

    public function __construct( array $items = [] )
    {
        foreach ($items as $name => $price) {
            $this->addItem($name, $price);
        }
    }

    public function addItem( $name, $price ): void
    {
        $this->items[] = ['name' => $name,  'price' => $price];
    }
    public function print(): string
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * Recibo::IVA;
        }

        return number_format($total, 2, '.', '');
    }
}