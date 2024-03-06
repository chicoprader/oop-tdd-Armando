<?php
/**
 * Created by PhpStorm.
 * User: arzola
 * Date: 10/28/17
 * Time: 10:11 AM
 */

namespace Db;

class FacturaConDescuento extends Factura
{
    public function print(): string
    {
        return $this->getTotal();

    }

    private function getTotal(): string
    {
        return '$800';
    }
}
