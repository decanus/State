<?php

namespace State\States
{
    use State\OrderInterface;

    class InitialState implements OrderInterface
    {
        /**
         * @return PaidOrderState
         */
        public function payOrder()
        {
            return new PaidOrderState();
        }

        /**
         * @throws \RuntimeException
         */
        public function processOrder()
        {
            throw new \RuntimeException('cant be processed');
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
            throw new \RuntimeException('cant be delivered');
        }

        /**
         * @throws \RuntimeException
         */
        public function returnOrder()
        {
            throw new \RuntimeException('cant be ordered');
        }

        /**
         * @return bool
         */
        public function isPaid()
        {
            return true;
        }
    }
}
