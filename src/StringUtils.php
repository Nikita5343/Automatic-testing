<?php

namespace StringUtils;

function capitalize($text)
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "$firstSymbol$restSubstring";
}

//print_r(capitalize('hello'));
