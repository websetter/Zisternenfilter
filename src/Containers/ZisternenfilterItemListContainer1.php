<?php

namespace Zisternenfilter\Containers;

use Plenty\Plugin\Templates\Twig;

class ZisternenfilterItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Zisternenfilter::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}