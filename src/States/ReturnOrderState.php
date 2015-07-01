<?php

namespace State\States
{
    use State\OrderInterface;

    class ReturnOrderState implements OrderInterface
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
            throw new \RuntimeException('already delivered');
        }

        /**
         * @return bool
         */
        public function isPaid()
        {
            return true;
        }

        public function returnOrder()
        {
            throw new \RuntimeException('Order already returned');
        }
    }
}
