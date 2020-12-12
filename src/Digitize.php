<?php

namespace ActionSandbox;

class Digitize
{
    public static function digitize(string $one, string $two) : int {
        return (int)($one . $two);
    }
}