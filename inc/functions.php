<?php
    function output($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
    
    function sum(int|float $a, int|float $b): int|float
    {
        $result = $a + $b;
        return $result;
    }
    
    function pluck($arr, $key)
    {
        $result = array_map(function($item) use($key) {
            return $item[$key];
        }, $arr);
    
        return $result;
    }
?>
