<?php

namespace Gajdaw\TwigExtBundle\Twig;

class FunnyExtension extends \Twig_Extension
{

    public function dotsFunction($number = 0)
    {
        return str_repeat('.', $number);
    }

    public function removespacesFilter($text)
    {
        return str_replace(' ', '', $text);
    }

    public function getFilters()
    {
        return array(
            'removespaces' => new \Twig_Filter_Method($this, 'removespacesFilter'),
            'funny' => new \Twig_Filter_Method($this, 'funnyFilter'),
            'oa' => new \Twig_Filter_Method($this, 'oaFilter'),
        );
    }

    public function funnyFilter($text)
    {
        return str_replace('l', 'XXX', $text);
    }

    public function oaFilter($text)
    {
        return $text . " almost dodget rocket";
    }

    public function getFunctions()
    {
        return array(
            'dots' => new \Twig_Function_Method($this, 'dotsFunction'),
            'smile' => new \Twig_Function_Method($this, 'smileFunction'),
            'copyright' => new \Twig_Function_Method($this, 'copyrightFunction'),
        );
    }

    public function smileFunction($number = 5)
    {
        return str_repeat(':)', $number);
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

