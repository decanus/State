<?php

namespace State\States
{
    use State\OrderInterface;

    class CancelOrderState implements OrderInterface
    {
        /**
         * @var bool
         */
        private $isPaid;

        /**
         * @param bool $isPaid
         */
        public function __construct($isPaid)
        {
            $this->isPaid = $isPaid;
        }

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
            throw new \RuntimeException('already cancelled');
        }

        /**
         * @throws \RuntimeException
         */
        public function deliverOrder()
        {
            throw new \RuntimeException('cant be  delivered');
        }

        /**
         * @throws \RuntimeException
         */
        public function returnOrder()
        {
            throw new \RuntimeException('cant be returned');
        }

        /**
         * @return bool
         */
        public function isPaid()
        {
            return $this->isPaid;
        }
    }
}
