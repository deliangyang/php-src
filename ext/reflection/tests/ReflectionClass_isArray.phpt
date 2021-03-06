--TEST--
public bool ReflectionParameter::isArray ( void );
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - @phpsp - sao paulo - br
--FILE--
<?php

function testReflectionIsArray(array $a, ?array $b, iterable $c, array|string $d) {}

$reflection = new ReflectionFunction('testReflectionIsArray');

foreach ($reflection->getParameters() as $parameter) {
    var_dump($parameter->isArray());
}
?>
--EXPECTF--
Deprecated: Function ReflectionParameter::isArray() is deprecated in %s on line %d
bool(true)

Deprecated: Function ReflectionParameter::isArray() is deprecated in %s on line %d
bool(true)

Deprecated: Function ReflectionParameter::isArray() is deprecated in %s on line %d
bool(false)

Deprecated: Function ReflectionParameter::isArray() is deprecated in %s on line %d
bool(false)
