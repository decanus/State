<?php

namespace State
{
    class OrderFacadeTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var OrderFacade
         */
        private $orderFacade;
        private $state;

        protected function setUp()
        {
            $this->state = $this->getMock(\State\OrderInterface::class);
            $this->orderFacade = new OrderFacade($this->state);
        }

        public function testPayOrderReturnsState()
        {
            $state = $this->getMockBuilder(\State\States\ProcessOrderState::class)
                ->disableOriginalConstructor()
                ->getMock();
            $this->state
                ->expects($this->once())
                ->method('payOrder')
                ->will($this->returnValue($state));

            $this->orderFacade->payOrder();

            $state->expects($this->once())->method('isPaid')->will($this->returnValue(true));
            $this->assertTrue($this->orderFacade->isPaid());
        }

        public function testProcessOrderReturnsState()
        {
            $this->state
                ->expects($this->once())
                ->method('processOrder')
                ->will($this->returnValue($this->state));

            $this->orderFacade->processOrder();
        }

        public function testDeliverOrderReturnsState()
        {
            $this->state
                ->expects($this->once())
                ->method('deliverOrder')
                ->will($this->returnValue($this->state));

            $this->orderFacade->deliverOrder();
        }

        public function testReturnOrderReturnsState()
        {
            $this->state
                ->expects($this->once())
                ->method('returnOrder')
                ->will($this->returnValue($this->state));

            $this->orderFacade->returnOrder();
        }

        public function testCancelOrderReturnsState()
        {
            $this->state
                ->expects($this->once())
                ->method('cancelOrder')
                ->will($this->returnValue($this->state));

            $this->orderFacade->cancelOrder();
        }
    }
}
