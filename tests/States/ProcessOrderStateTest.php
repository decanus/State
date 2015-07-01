<?php

namespace State\States
{
    class ProcessOrderStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var ProcessOrderState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new ProcessOrderState();
        }

        public function testPayOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->payOrder();
        }

        public function testProcessOrderThrowsException()
        {
            $this->assertInstanceOf(\State\States\DeliveredOrderState::class, $this->state->processOrder());

        }

        public function testCancelOrderThrowsException()
        {
            $this->assertInstanceOf(\State\States\CancelOrderState::class, $this->state->cancelOrder());

        }

        public function testDeliverOrderWorks()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->deliverOrder();
        }

        public function testReturnOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->returnOrder();
        }

        public function testIsPaidReturnsTrue()
        {
            $this->assertTrue($this->state->isPaid());
        }
    }
}
