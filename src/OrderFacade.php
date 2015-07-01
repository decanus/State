<?php

namespace State
{
    class OrderFacade implements OrderInterface
    {
        /**
         * @var OrderInterface
         */
        private $state;

        /**
         * @param OrderInterface $state
         */
        public function __construct(OrderInterface $state)
        {
            $this->state = $state;
        }

        public function payOrder()
        {
            $this->setState($this->state->payOrder());
        }

        public function processOrder()
        {
            $this->setState($this->state->processOrder());
        }

        public function deliverOrder()
        {
            $this->setState($this->state->deliverOrder());
        }

        public function returnOrder()
        {
            $this->setState($this->state->returnOrder());
        }

        public function cancelOrder()
        {
            $this->setState($this->state->cancelOrder());
        }

        /**
         * @return bool
         */
        public function isPaid()
        {
            return $this->state->isPaid();
        }

        /**
         * @param OrderInterface $state
         */
        private function setState(OrderInterface $state)
        {
            $this->state = $state;
        }
    }
}
