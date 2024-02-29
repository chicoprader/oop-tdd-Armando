<?php
namespace App;
/*
 * Ejercicio
 * Implementar la clase Magic para que funcione el código de ejemplo
 * TIP: Magia
 */

class Magic
{
    //TODO

    /**
     * Function queHayAmigos
     * @return string
     */
    public function queHayAmigos()
    {
        return 'Hola llamando a queHayAmigos()';
    }

    /**
     * Function nofunciona
     * @return string
     */
    public function nofunciona()
    {
        return 'Hola llamando a nofunciona()';
    }

    /**
     * Function hello
     * @param string|null
     * @return string
     */
    public function hello($palabra = null ):string
    {
        if ( !empty( $palabra ) ) {
            return 'Hello World()';
        }
        else {
            return 'Hola llamando a hello';
        }

    }
    /**
     * Function randomWord
     * @param string|null
     * @return string
     */
    public function randomMethod($palabra = null ):string
    {
        if ( !empty( $palabra ) ) {
            return 'Hello World()';
        }
        else {
            return 'Hola llamando a $randomWord()';
        }

    }
    public function __call($name, $arguments)
    {
        $this->randomMethod( $name );
    }
}



