<?php

namespace State\States
{
    use State\OrderInterface;

    class DeliveredOrderState implements OrderInterface
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
         * @throws \RuntimeException
         */
        public function cancelOrder()
        {
            throw new \RuntimeException('cant be  canceled');
        }

        /**
         * @throws \RuntimeException
         */
        public function deliverOrder()
        {
            throw new \RuntimeException('cant be  canceled');
        }

        /**
         * @throws \RuntimeException
         */
        public function returnOrder()
        {
            return new ReturnOrderState();
        }

        public function isPaid()
        {
            return true;
        }
    }
}
