<?php

namespace State
{
    interface OrderInterface
    {
        public function payOrder();
        public function processOrder();
        public function cancelOrder();
        public function deliverOrder();
        public function returnOrder();
        public function isPaid();
    }
}
