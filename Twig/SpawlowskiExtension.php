<?php

namespace Gajdaw\TwigExtBundle\Twig;

class SpawlowskiExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            'spawlowski' => new \Twig_Filter_Method($this, 'spawlowskiFilter'),
        );
    }

    public function spawlowskiFilter($text)
    {
        return preg_replace('/.*/', 'spawlowski', $text);
    }

    public function getName()
    {
        return 'funny';
    }
}

