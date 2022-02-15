<?php

namespace StringUtils;

function capitalize($text)
{
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "$firstSymbol$restSubstring";
}
