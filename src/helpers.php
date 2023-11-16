<?php

function ajax($url, $callback)
{
    $resultado = file_get_contents($url);
    $data['data'] = $resultado;
    $data['success'] = true;
    $callback($data);
    
}