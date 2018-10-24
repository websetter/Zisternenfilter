<?php

namespace Zisternenfilter\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisternenfilterItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Zisternenfilter::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}