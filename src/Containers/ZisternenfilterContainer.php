<?php

namespace Zisternenfilter\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisternenfilterContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Zisternenfilter::Stylesheet');
    }
}