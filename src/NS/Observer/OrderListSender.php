<?php

namespace NS\Observer;

class OrderListSender implements ObserverInterface
{
    function onChanged($sender, $product)
    {
        \NS\Log::print(sprintf('Выполнили действие %s, слушателя %s с параметром %s', get_class($this), get_class($sender), get_class($product)));
    }
}
