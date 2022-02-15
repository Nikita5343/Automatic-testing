<?php

require_once "../vendor/autoload.php";
require_once "../src/StringUtils.php";

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::notEq(capitalize(''),'1');
Assert::notEq(capitalize('hello'),'Hedllo');
echo "Тесты прошли!";