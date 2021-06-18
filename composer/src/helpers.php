<?php

if (! function_exists ('upper')){
    function upper ($value) {
        return text\format::upperText($value);
    }
}
if (! function_exists ('lower')){
    function lower ($value) {
        return text\format::lowerText($value);
    }
}