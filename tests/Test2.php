<?php

$patch1 = __DIR__ . '/../vendor/autoload.php';
$patch2 = __DIR__ . '/../../../autoload.php';
if (file_exists($patch1)) {
    require_once $patch1;
} else {
    require_once $patch2;
}
$src1 = __DIR__ . '/src/StringUtils.php';
$src2 = __DIR__ . '/../src/StringUtils.php';
if (file_exists($src1)) {
    require_once $src1;
} else {
    require_once $src2;
}

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::notEq(capitalize(''), 'f');
Assert::notEq(capitalize('hello'), 'Hedllo');
echo "Тесты прошли!";
