<?php

namespace State\States
{
    class PaidOrderStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var PaidOrderState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new PaidOrderState();
        }

        public function testPayOrderThrowsException()
        {
            $this->assertInstanceOf(\State\States\ProcessOrderState::class, $this->state->payOrder());

        }

        public function testProcessOrderThrowsException()
        {
            $this->setExpectedException(\RuntimeException::class);
            $this->state->processOrder();
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
