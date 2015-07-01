<?php

namespace State\States
{
    class OrderDoneStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var OrderDoneState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new OrderDoneState();
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

        public function testDeliverOrderWorks()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->deliverOrder();
        }

        public function testReturnOrderThrowsException()
        {
            $this->assertInstanceOf(\State\States\ReturnOrderState::class, $this->state->returnOrder());
        }

        public function testIsPaidReturnsTrue()
        {
            $this->assertTrue($this->state->isPaid());
        }
    }
}
