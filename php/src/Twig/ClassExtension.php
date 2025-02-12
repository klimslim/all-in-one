<?php

namespace AIO\Twig;

use Slim\Views\TwigExtension;
use Twig\TwigFunction;

class ClassExtension extends TwigExtension
{
    public function getFunctions() : array
    {
        return [new TwigFunction('class', [$this, 'getClassName'])];
    }

    public function getClassName(mixed $object) : ?string
    {
        if (!is_object($object)) {
            return null;
        }

        return get_class($object);
    }
}