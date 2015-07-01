<?php

namespace State\States
{
    class ReturnOrderStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var ReturnOrderState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new ReturnOrderState();
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
            $this->assertInstanceOf(\State\States\OrderDoneState::class, $this->state->returnOrder());

        }

        public function testIsPaidReturnsTrue()
        {
            $this->assertTrue($this->state->isPaid());
        }
    }
}
