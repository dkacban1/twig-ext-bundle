<?php

namespace Gajdaw\TwigExtBundle\Twig;

class FunnyExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            'funny' => new \Twig_Filter_Method($this, 'funnyFilter'),
        );
    }

    public function funnyFilter($text)
    {
        return str_replace('l', 'XXX', $text);
    }

    public function getFunctions()
    {
        return array(
            'smile' => new \Twig_Function_Method($this, 'smileFunction'),
            'copyright' => new \Twig_Function_Method($this, 'copyrightFunction'),
        );
    }

    public function smileFunction($number = 5)
    {
        return str_repeat(':-)', $number);
    }

    public function copyrightFunction()
    {
        return '&copy;';
    }

    public function getName()
    {
        return 'funny';
    }
}

