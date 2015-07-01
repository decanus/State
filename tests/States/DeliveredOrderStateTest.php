<?php

namespace State\States
{
    class DeliveredOrderStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var DeliveredOrderState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new DeliveredOrderState();
        }

        public function testPayOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->payOrder();
        }

        public function testProcessOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->processOrder();
        }

        public function testCancelOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->cancelOrder();
        }

        public function testDeliverOrderReturnsOrderDoneState()
        {
            $this->assertInstanceOf(\State\States\OrderDoneState::class, $this->state->deliverOrder());
        }

        public function testReturnOrderReturnsReturnOrderState()
        {
            $this->assertInstanceOf(\State\States\ReturnOrderState::class, $this->state->returnOrder());
        }

        public function testIsPaidReturnsTrue()
        {
            $this->assertTrue($this->state->isPaid());
        }
    }
}
