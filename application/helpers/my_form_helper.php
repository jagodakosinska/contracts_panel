<?php

function check_form($key, $arr) {
if(is_array($arr)) {
    return isset($arr[$key]) ? $arr[$key] : '';

} elseif(is_object($arr)) {
    return isset($arr->{$key}) ? $arr->{$key} : '';
}

  
}