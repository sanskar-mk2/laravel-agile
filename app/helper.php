<?php

if (!function_exists("p")) {
    function p($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (!function_exists("s2t")) {
    function s2t($snake)
    {
        $snake = explode("_", $snake);
        $ret = [];
        foreach ($snake as $key => $segment) {
            $ret[$key] =  ucfirst($segment);
        }
        return implode(" ", $ret);
    }
}
