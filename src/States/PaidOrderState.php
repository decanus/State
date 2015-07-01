<?php

namespace State\States
{
    use State\OrderInterface;

    class PaidOrderState implements OrderInterface
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
            return new ProcessOrderState();
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
            throw new \RuntimeException('order not paid');
        }

        /**
         * @throws \RuntimeException
         */
        public function returnOrder()
        {
            throw new \RuntimeException('order not paid');
        }

        public function isPaid()
        {
            return true;
        }
    }
}
