<?php

namespace State\States
{
    use State\OrderInterface;

    class ProcessOrderState implements OrderInterface
    {
        /**
         * @throws \RuntimeException
         */
        public function payOrder()
        {
            throw new \RuntimeException('already paid');
        }

        /**
         * @throws \RuntimeException
         */
        public function processOrder()
        {
            throw new \RuntimeException('already processed');
        }

        /**
         * @return CancelOrderState
         */
        public function cancelOrder()
        {
            return new CancelOrderState($this->isPaid());
        }

        /**
         * @throws \RuntimeException
         */
        public function deliverOrder()
        {
            return new DeliveredOrderState();
        }

        public function orderDone()
        {
            throw new \RuntimeException('order not processed');
        }

        /**
         * @throws \RuntimeException
         */
        public function returnOrder()
        {
            throw new \RuntimeException('order not processed');
        }

        public function isPaid()
        {
            return true;
        }
    }
}
