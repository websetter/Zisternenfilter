<?php

namespace Zisternenfilter\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisternenfilterItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Zisternenfilter::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}