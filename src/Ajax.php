<?php

namespace App;

class Ajax
    {
    public static function ajax($url, callable $callback)
    {

        $data = file_get_contents($url);
        $callback([
            'success' => true,
            'data' => $data
        ]);
    }
    
    }
