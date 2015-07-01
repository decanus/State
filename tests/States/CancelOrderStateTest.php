<?php

namespace State\States
{
    class CancelOrderStateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var CancelOrderState
         */
        private $state;

        protected function setUp()
        {
            $this->state = new CancelOrderState(true);
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
            $this->assertInstanceOf(\State\States\OrderDoneState::class, $this->state->cancelOrder());

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
